<?php
/**
 * Title: Online Market
 * Slug: coffee-shop/featured-products
 * Categories: coffee-shop, woo-commerce
 * Description: Dark band with the floating takeaway cup and a scrolling row of the newest products (needs WooCommerce).
 *
 * @package coffee-shop
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/machine-blur.webp' ) ); ?>","dimRatio":70,"customOverlayColor":"#0c0a08","isUserOverlayColor":true,"isDark":true,"align":"full","className":"coffee-market","style":{"spacing":{"padding":{"top":"clamp(4rem, 8vw, 6rem)","bottom":"clamp(4rem, 8vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull coffee-market" style="padding-top:clamp(4rem, 8vw, 6rem);padding-bottom:clamp(4rem, 8vw, 6rem)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#0c0a08"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/machine-blur.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"clamp(1.5rem, 4vw, 3rem)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"24%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:24%">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"coffee-cup coffee-reveal"} -->
<figure class="wp-block-image size-full coffee-cup coffee-reveal"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/takeaway.webp' ) ); ?>" alt="<?php esc_attr_e( 'Logolu karton kahve bardağı', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"76%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:76%">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color"><?php esc_html_e( 'Midnight Bloom serisi', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Online Market', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"className":"coffee-rail","layout":{"type":"default"}} -->
<div class="wp-block-group coffee-rail">
<!-- wp:woocommerce/product-new {"columns":5,"rows":1,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":true}} /-->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:html -->
<div class="coffee-rail-btns" style="display:flex;gap:.5rem"><button type="button" data-coffee-rail="-1" aria-label="<?php esc_attr_e( 'Önceki ürünler', 'coffee-shop' ); ?>">←</button><button type="button" data-coffee-rail="1" aria-label="<?php esc_attr_e( 'Sonraki ürünler', 'coffee-shop' ); ?>">→</button></div>
<!-- /wp:html -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-brown"} -->
<div class="wp-block-button is-style-brown"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>"><?php esc_html_e( 'Alışverişe Başla!', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
