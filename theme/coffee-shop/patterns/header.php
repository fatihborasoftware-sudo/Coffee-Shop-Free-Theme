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
<!-- wp:group {"className":"coffee-header","style":{"spacing":{"blockGap":"0","padding":{"left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group coffee-header" style="padding-left:0;padding-right:0">
<!-- wp:group {"className":"coffee-topbar","style":{"spacing":{"padding":{"top":"0.55rem","bottom":"0.55rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-topbar" style="padding-top:0.55rem;padding-bottom:0.55rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"coffee-topbar-side","style":{"layout":{"selfStretch":"fixed","flexSize":"240px"}}} -->
<p class="coffee-topbar-side"><?php esc_html_e( 'Her gün 08:00 – 22:00', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"coffee-ticker","layout":{"type":"default"}} -->
<div class="wp-block-group coffee-ticker">
<!-- wp:paragraph -->
<p><?php echo wp_kses( __( '<strong>₺900</strong> ve üzeri siparişlerde kargo bedava', 'coffee-shop' ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( __( 'Her hafta <strong>taze kavrum</strong>, aynı gün kargoda', 'coffee-shop' ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses( __( 'Kahve Kulübü üyelerine <strong>%10</strong> indirim', 'coffee-shop' ), array( 'strong' => array() ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only coffee-topbar-side","style":{"layout":{"selfStretch":"fixed","flexSize":"240px"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only coffee-topbar-side">
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group" style="padding-top:0.9rem;padding-bottom:0.9rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":158,"shouldSyncIcon":false} /-->
<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"1.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"fontFamily":"display"} /-->
<!-- wp:navigation {"textColor":"white","overlayBackgroundColor":"ink","overlayTextColor":"white","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"2.2rem"},"layout":{"selfStretch":"fill","flexSize":null}}} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.4rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:search {"label":"Ara","showLabel":false,"buttonText":"Ara","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"style":{"border":{"width":"0px","style":"none"}}} /-->
<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon"} /-->
<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true} /-->
<!-- wp:buttons {"className":"coffee-cta"} -->
<div class="wp-block-buttons coffee-cta">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>"><?php esc_html_e( 'İletişim', 'coffee-shop' ); ?></a></div>
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
