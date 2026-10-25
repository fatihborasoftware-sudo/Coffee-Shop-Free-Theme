// Renders each .dc.html artboard to a static HTML page (default state).
const fs = require('fs');
const path = require('path');
const { JSDOM } = require('jsdom');

const [srcDir, outDir] = process.argv.slice(2);
const NAMES = {
  'Main.dc.html': 'index.html', 'Shop.dc.html': 'shop.html', 'Product.dc.html': 'product.html',
  'Cart.dc.html': 'cart.html', 'Account.dc.html': 'account.html', 'About.dc.html': 'about.html',
  'Dealer.dc.html': 'dealer.html', 'Contact.dc.html': 'contact.html', 'Blog.dc.html': 'blog.html',
  'Post.dc.html': 'post.html',
};

class DCLogic { constructor(props) { this.props = props; this.state = null; } setState() {} forceUpdate() {} }

function loadComponent(file) {
  const html = fs.readFileSync(path.join(srcDir, file), 'utf8');
  const dom = new JSDOM(html);
  const doc = dom.window.document;
  const script = doc.querySelector('script[data-dc-script]');
  const Component = new Function('DCLogic', script.textContent + '\nreturn Component;')(DCLogic);
  return { doc, Component, title: doc.querySelector('title').textContent, lang: doc.documentElement.lang };
}

const lookup = (scope, p) => {
  p = p.trim();
  if (p === 'true') return true;
  if (p === 'false') return false;
  if (/^-?\d+(\.\d+)?$/.test(p)) return Number(p);
  return p.split('.').reduce((o, k) => (o == null ? undefined : o[k]), scope);
};
const whole = (s) => { const m = /^\s*\{\{([^}]+)\}\}\s*$/.exec(s); return m ? m[1] : null; };
const interp = (s, scope) => s.replace(/\{\{([^}]+)\}\}/g, (_, p) => { const v = lookup(scope, p); return v == null ? '' : String(v); });

function renderInto(nodes, scope, doc, helmet) {
  const out = [];
  for (const node of nodes) out.push(...renderNode(node, scope, doc, helmet));
  return out;
}

function renderNode(node, scope, doc, helmet) {
  if (node.nodeType === 3) return [doc.createTextNode(interp(node.textContent, scope))];
  if (node.nodeType === 8) return [];
  if (node.nodeType !== 1) return [];
  const tag = node.tagName.toLowerCase();
  if (tag === 'helmet') { helmet.push(...node.children); return []; }
  if (tag === 'sc-for') {
    const list = lookup(scope, whole(node.getAttribute('list'))) || [];
    const as = node.getAttribute('as');
    const res = [];
    list.forEach((item, i) => res.push(...renderInto([...node.childNodes], { ...scope, [as]: item, $index: i }, doc, helmet)));
    return res;
  }
  if (tag === 'sc-if') {
    return lookup(scope, whole(node.getAttribute('value'))) ? renderInto([...node.childNodes], scope, doc, helmet) : [];
  }
  if (tag === 'dc-import') {
    const props = {};
    for (const a of node.attributes) {
      if (a.name === 'name' || a.name.startsWith('hint-')) continue;
      const key = a.name.replace(/-([a-z])/g, (_, c) => c.toUpperCase());
      const w = whole(a.value);
      props[key] = w ? lookup(scope, w) : interp(a.value, scope);
    }
    return renderComponent(node.getAttribute('name') + '.dc.html', props, doc, helmet);
  }
  const el = doc.createElement(tag);
  for (const a of node.attributes) {
    if (/^on[A-Z]/.test(a.name) || /^on[a-z]+$/.test(a.name) || a.name.startsWith('hint-')) continue;
    let v = interp(a.value, scope);
    if (a.name === 'href' && NAMES[v]) v = NAMES[v];
    el.setAttribute(a.name, v);
  }
  for (const c of renderInto([...node.childNodes], scope, doc, helmet)) el.appendChild(c);
  return [el];
}

function renderComponent(file, props, doc, helmet) {
  const { doc: src, Component } = loadComponent(file);
  const vals = new Component(props).renderVals() || {};
  const root = src.querySelector('x-dc');
  return renderInto([...root.childNodes], vals, doc, helmet);
}

fs.mkdirSync(outDir, { recursive: true });
for (const [file, outName] of Object.entries(NAMES)) {
  const { title, lang } = loadComponent(file);
  const out = new JSDOM('<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"></head><body></body></html>');
  const doc = out.window.document;
  doc.documentElement.lang = lang || 'tr';
  const t = doc.createElement('title'); t.textContent = title + ' – Coffee'; doc.head.appendChild(t);
  const helmet = [];
  const body = renderComponent(file, {}, doc, helmet);
  const seen = new Set();
  for (const h of helmet) {
    const key = h.outerHTML;
    if (seen.has(key)) continue;
    seen.add(key);
    doc.head.appendChild(doc.importNode(h, true));
  }
  for (const n of body) doc.body.appendChild(n);
  fs.writeFileSync(path.join(outDir, outName), '<!doctype html>\n' + doc.documentElement.outerHTML + '\n');
  console.log('wrote', outName);
}
