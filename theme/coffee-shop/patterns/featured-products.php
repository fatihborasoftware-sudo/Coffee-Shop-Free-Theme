<?php
/**
 * Title: Featured products
 * Slug: coffee-shop/featured-products
 * Categories: coffee-shop, woo-commerce
 * Description: Light section with a heading and the newest products (needs WooCommerce).
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","className":"coffee-products","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"2.5rem"},"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}},"backgroundColor":"light","textColor":"ink","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull coffee-products has-ink-color has-light-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"brown","fontSize":"small"} -->
<p class="coffee-eyebrow has-brown-color has-text-color has-small-font-size"><?php esc_html_e( 'Online Market', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Midnight Bloom serisi', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"slate"} -->
<p class="has-slate-color has-text-color"><?php esc_html_e( 'Gecenin sakinliğinden ilham alan özel harman. İlk yudumda kakao ve hafif karamel, bitişte yumuşak çiçeksi bir aroma.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline","style":{"border":{"color":"var:preset|color|ink"},"color":{"text":"var:preset|color|ink"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>" style="border-color:var(--wp--preset--color--ink);color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Tüm ürünler', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:woocommerce/product-new {"columns":4,"rows":1,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":true}} /-->
</div>
<!-- /wp:group -->
