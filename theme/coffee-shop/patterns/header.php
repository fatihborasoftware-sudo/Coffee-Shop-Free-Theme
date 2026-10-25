<?php
/**
 * Title: Header
 * Slug: coffee-shop/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"className":"coffee-header","style":{"spacing":{"blockGap":"0","padding":{"left":"0","right":"0"}},"border":{"bottom":{"color":"var:preset|color|surface","width":"1px"}}},"backgroundColor":"ink","layout":{"type":"default"}} -->
<div class="wp-block-group coffee-header has-ink-background-color has-background" style="border-bottom-color:var(--wp--preset--color--surface);border-bottom-width:1px;padding-left:0;padding-right:0">
<!-- wp:group {"className":"coffee-topbar","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem"}},"typography":{"fontWeight":"500"}},"backgroundColor":"caramel","textColor":"ink","fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group coffee-topbar has-ink-color has-caramel-background-color has-text-color has-background has-small-font-size" style="padding-top:0.5rem;padding-bottom:0.5rem;font-weight:500">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">900,00 TL ve üzeri alışverişlerde kargo bedava</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.125rem","bottom":"1.125rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:1.125rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:1.125rem;padding-left:var(--wp--preset--spacing--40)">
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":168,"shouldSyncIcon":false} /-->
<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontFamily":"display"} /-->
<!-- wp:navigation {"textColor":"muted","overlayBackgroundColor":"ink","overlayTextColor":"light","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"1.75rem"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:search {"label":"Ara","showLabel":false,"buttonText":"Ara","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"ink"} /-->
<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->
<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|caramel"},"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"1.25rem","right":"1.25rem"}},"typography":{"fontSize":"0.875rem","fontWeight":"500"},"color":{"text":"var:preset|color|caramel"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>" style="border-color:var(--wp--preset--color--caramel);color:var(--wp--preset--color--caramel);padding-top:0.65rem;padding-right:1.25rem;padding-bottom:0.65rem;padding-left:1.25rem;font-size:0.875rem;font-weight:500">İletişim</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
