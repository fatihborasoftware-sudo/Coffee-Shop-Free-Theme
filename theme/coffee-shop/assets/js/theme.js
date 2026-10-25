/**
 * Coffee Shop theme motion: header state, scroll reveal, headline words,
 * parallax, marquees, hero video slides, cookie card and dealer popup.
 */
( function () {
	'use strict';

	var cfg = window.coffeeShop || {};
	var reduce = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
	var body = document.body;
	var header = document.querySelector( 'header.wp-block-template-part' );

	// Page loader (front page only, printed by functions.php).
	var loader = document.querySelector( '.coffee-loader' );
	function playHeads() {
		document.querySelectorAll( '.coffee-split' ).forEach( function ( h ) {
			h.classList.add( 'is-go' );
		} );
	}
	if ( loader ) {
		setTimeout( function () {
			loader.classList.add( 'is-done' );
			playHeads();
		}, reduce ? 0 : 1300 );
	}

	// Header height, overlay pages and the solid state after scrolling.
	function setHeaderHeight() {
		if ( header ) {
			document.documentElement.style.setProperty( '--coffee-hh', header.offsetHeight + 'px' );
		}
	}
	var main = document.querySelector( 'main' );
	var first = main && ( main.querySelector( ':scope > .wp-block-cover:first-child' ) || main.querySelector( ':scope > .wp-block-post-content > .wp-block-cover:first-child, :scope > .entry-content > .wp-block-cover:first-child' ) );
	if ( first && first.classList.contains( 'alignfull' ) ) {
		body.classList.add( 'coffee-overlay' );
	}
	setHeaderHeight();
	window.addEventListener( 'resize', setHeaderHeight );

	var progress = document.createElement( 'span' );
	progress.className = 'coffee-progress';
	var bar = document.querySelector( '.coffee-header' );
	if ( bar ) {
		bar.appendChild( progress );
	}

	// Split hero and banner headlines into words for the reveal.
	document.querySelectorAll( '.coffee-hero h1, .coffee-banner h1' ).forEach( function ( h ) {
		h.classList.add( 'coffee-split' );
		var i = 0;
		( function walk( node ) {
			Array.prototype.slice.call( node.childNodes ).forEach( function ( c ) {
				if ( 3 === c.nodeType ) {
					var frag = document.createDocumentFragment();
					c.textContent.split( /(\s+)/ ).forEach( function ( part ) {
						if ( ! part ) {
							return;
						}
						if ( /^\s+$/.test( part ) ) {
							frag.appendChild( document.createTextNode( part ) );
							return;
						}
						var w = document.createElement( 'span' );
						w.className = 'coffee-w';
						var inner = document.createElement( 'span' );
						inner.textContent = part;
						inner.style.setProperty( '--i', i++ );
						w.appendChild( inner );
						frag.appendChild( w );
					} );
					node.replaceChild( frag, c );
				} else if ( 1 === c.nodeType ) {
					walk( c );
				}
			} );
		} )( h );
	} );
	if ( ! loader ) {
		requestAnimationFrame( playHeads );
	}

	// Scroll reveal with a short stagger inside each parent.
	var sel = [
		'.coffee-tilt', '.coffee-values > .wp-block-group > *', '.coffee-step', '.coffee-posts .wp-block-post',
		'.coffee-section-head', '.coffee-reveal', '.coffee-trust > *', '.coffee-fcols > *', '.coffee-news',
		'.coffee-product-card', '.coffee-info', '.coffee-framed', '.coffee-perk'
	].join( ',' );
	var io = 'IntersectionObserver' in window && ! reduce ? new IntersectionObserver( function ( entries ) {
		entries.forEach( function ( e ) {
			if ( e.isIntersecting ) {
				e.target.classList.add( 'is-in' );
				io.unobserve( e.target );
			}
		} );
	}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' } ) : null;
	document.querySelectorAll( sel ).forEach( function ( el ) {
		var sibs = Array.prototype.filter.call( el.parentNode.children, function ( x ) {
			return x.matches( sel );
		} );
		el.style.setProperty( '--d', Math.min( sibs.indexOf( el ), 5 ) * 90 + 'ms' );
		el.classList.add( 'coffee-rv' );
		if ( io ) {
			io.observe( el );
		} else {
			el.classList.add( 'is-in' );
		}
	} );

	// Marquees: turn "A • B • C" into a looping track.
	document.querySelectorAll( '.coffee-marquee' ).forEach( function ( m ) {
		var p = m.querySelector( 'p' );
		if ( ! p ) {
			return;
		}
		var dark = m.classList.contains( 'is-dark' );
		var words = p.textContent.split( '•' ).map( function ( s ) {
			return s.trim();
		} ).filter( Boolean );
		var html = words.map( function ( w, k ) {
			var span = document.createElement( 'span' );
			span.textContent = w;
			span.className = 'w' + ( dark && k % 2 ? ' o' : '' );
			return span.outerHTML + '<i' + ( ! dark && 0 === k % 2 ? ' class="bean"' : '' ) + '></i>';
		} ).join( '' );
		var track = document.createElement( 'div' );
		track.className = 'coffee-mq-track';
		track.setAttribute( 'aria-hidden', 'true' );
		track.innerHTML = '<div>' + html + '</div><div>' + html + '</div>';
		p.classList.add( 'screen-reader-text' );
		m.appendChild( track );
	} );

	// Parallax for photo backgrounds and the scroll progress line.
	var pars = document.querySelectorAll( '.coffee-banner .wp-block-cover__image-background, .coffee-market .wp-block-cover__image-background, .coffee-follow .wp-block-cover__image-background, .coffee-vband video' );
	var ticking = false;
	function frame() {
		ticking = false;
		var h = document.documentElement.scrollHeight - window.innerHeight;
		progress.style.transform = 'scaleX(' + ( h > 0 ? window.scrollY / h : 0 ) + ')';
		body.classList.toggle( 'coffee-scrolled', window.scrollY > 60 );
		if ( reduce ) {
			return;
		}
		pars.forEach( function ( el ) {
			var r = el.parentNode.getBoundingClientRect();
			if ( r.bottom < 0 || r.top > window.innerHeight ) {
				return;
			}
			var max = r.height * 0.06;
			var off = Math.max( -max, Math.min( max, ( r.top + r.height / 2 - window.innerHeight / 2 ) * -0.12 ) );
			el.style.transform = 'translate3d(0,' + off.toFixed( 1 ) + 'px,0)';
		} );
	}
	window.addEventListener( 'scroll', function () {
		if ( ! ticking ) {
			ticking = true;
			requestAnimationFrame( frame );
		}
	}, { passive: true } );
	frame();

	// Hero: extra video slides crossfade every 8 seconds.
	var hero = document.querySelector( '.coffee-hero' );
	if ( hero && cfg.slides && cfg.slides.length && ! reduce ) {
		var base = hero.querySelector( '.wp-block-cover__video-background' );
		var slides = base ? [ base ] : [];
		cfg.slides.forEach( function ( s ) {
			var v = document.createElement( 'video' );
			v.className = 'coffee-slide';
			v.muted = true;
			v.loop = true;
			v.playsInline = true;
			v.preload = 'none';
			v.setAttribute( 'aria-hidden', 'true' );
			v.poster = s.poster;
			v.src = s.src;
			hero.insertBefore( v, hero.querySelector( '.wp-block-cover__background' ) );
			slides.push( v );
		} );
		if ( base ) {
			base.classList.add( 'coffee-slide', 'is-on' );
		}
		var counter = document.createElement( 'div' );
		counter.className = 'coffee-counter';
		counter.setAttribute( 'aria-hidden', 'true' );
		counter.innerHTML = '<span>01</span> <i></i> 0' + slides.length;
		hero.appendChild( counter );
		var cur = 0;
		setInterval( function () {
			var prev = slides[ cur ];
			cur = ( cur + 1 ) % slides.length;
			var next = slides[ cur ];
			next.preload = 'auto';
			var pr = next.play();
			if ( pr && pr.catch ) {
				pr.catch( function () {} );
			}
			next.classList.add( 'is-on' );
			prev.classList.remove( 'is-on' );
			setTimeout( function () {
				prev.pause();
			}, 1500 );
			counter.firstChild.textContent = '0' + ( cur + 1 );
		}, 8000 );
	}
	if ( hero ) {
		var cue = document.createElement( 'div' );
		cue.className = 'coffee-cue';
		cue.setAttribute( 'aria-hidden', 'true' );
		cue.innerHTML = '<i></i>' + ( cfg.i18n ? cfg.i18n.scroll : 'Kaydır' );
		hero.appendChild( cue );
	}

	// Product rail arrows.
	document.querySelectorAll( '[data-coffee-rail]' ).forEach( function ( b ) {
		b.addEventListener( 'click', function () {
			var r = document.querySelector( '.coffee-rail .wc-block-grid__products' );
			if ( r ) {
				r.scrollBy( { left: Number( b.getAttribute( 'data-coffee-rail' ) ) * r.clientWidth * 0.8, behavior: 'smooth' } );
			}
		} );
	} );

	// Back to top.
	document.querySelectorAll( '.coffee-totop' ).forEach( function ( b ) {
		b.addEventListener( 'click', function () {
			window.scrollTo( { top: 0, behavior: reduce ? 'auto' : 'smooth' } );
		} );
	} );

	// Count-up numbers.
	function countUp( root ) {
		root.querySelectorAll( '[data-count]' ).forEach( function ( el ) {
			var to = Number( el.getAttribute( 'data-count' ) );
			var t0 = performance.now();
			var dur = reduce ? 1 : 1100;
			( function step( now ) {
				var k = Math.min( 1, ( now - t0 ) / dur );
				el.textContent = Math.round( to * ( 1 - Math.pow( 1 - k, 3 ) ) );
				if ( k < 1 ) {
					requestAnimationFrame( step );
				}
			} )( t0 );
		} );
	}

	// Cookie card: remembered for a year once answered.
	var cookie = document.querySelector( '.coffee-cookie' );
	function readConsent() {
		try {
			return window.localStorage.getItem( 'coffeeCookieConsent' );
		} catch ( e ) {
			return null;
		}
	}
	function saveConsent( value ) {
		try {
			window.localStorage.setItem( 'coffeeCookieConsent', value );
		} catch ( e ) {}
		document.cookie = 'coffee_cookie_consent=' + encodeURIComponent( value ) + ';path=/;max-age=31536000;SameSite=Lax';
	}
	if ( cookie && ! readConsent() ) {
		setTimeout( function () {
			cookie.hidden = false;
			body.classList.add( 'coffee-cookie-open' );
		}, reduce ? 300 : 2000 );
	}
	function closeCookie( value ) {
		saveConsent( value );
		cookie.hidden = true;
		body.classList.remove( 'coffee-cookie-open' );
	}
	if ( cookie ) {
		cookie.querySelectorAll( '[data-consent]' ).forEach( function ( b ) {
			b.addEventListener( 'click', function () {
				closeCookie( b.getAttribute( 'data-consent' ) );
			} );
		} );
		var prefsBtn = cookie.querySelector( '.lnk' );
		var prefs = cookie.querySelector( '.prefs' );
		if ( prefsBtn && prefs ) {
			prefsBtn.addEventListener( 'click', function () {
				if ( prefs.hidden ) {
					prefs.hidden = false;
					prefsBtn.textContent = prefsBtn.getAttribute( 'data-save' );
					return;
				}
				var chosen = Array.prototype.map.call( prefs.querySelectorAll( 'input[name]:checked' ), function ( x ) {
					return x.name;
				} );
				closeCookie( [ 'necessary' ].concat( chosen ).join( ',' ) );
			} );
		}
	}

	// Dealer popup.
	var modal = document.querySelector( '.coffee-modal' );
	var lastFocus = null;
	function openModal( e ) {
		if ( ! modal ) {
			return;
		}
		if ( e ) {
			e.preventDefault();
		}
		lastFocus = document.activeElement;
		modal.hidden = false;
		body.style.overflow = 'hidden';
		countUp( modal );
		setTimeout( function () {
			var f = modal.querySelector( 'input:not([type="hidden"]), select, textarea, a, button' );
			if ( f ) {
				f.focus();
			}
		}, 300 );
	}
	function closeModal() {
		if ( ! modal || modal.hidden ) {
			return;
		}
		modal.hidden = true;
		body.style.overflow = '';
		if ( lastFocus ) {
			lastFocus.focus();
		}
	}
	if ( modal ) {
		document.querySelectorAll( '.coffee-bayi, a[href$="#bayilik-formu"], .coffee-open-dealer a' ).forEach( function ( b ) {
			b.addEventListener( 'click', openModal );
		} );
		modal.querySelectorAll( '[data-close]' ).forEach( function ( b ) {
			b.addEventListener( 'click', closeModal );
		} );
		document.addEventListener( 'keydown', function ( e ) {
			if ( 'Escape' === e.key ) {
				closeModal();
			}
		} );
	}
}() );
