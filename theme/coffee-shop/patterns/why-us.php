<?php
/**
 * Title: Why us teaser
 * Slug: coffee-shop/why-us
 * Categories: coffee-shop, about
 * Description: Image and text with a link to the Neden Biz? page.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3.5rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:cover {"dimRatio":100,"customOverlayColor":"#2D3748","isUserOverlayColor":true,"minHeight":420,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#2D3748"></span><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '[Dükkan / kavurma fotoğrafı]', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'Neden Biz?', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Çekirdekten fincana, her adımda özen.', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php esc_html_e( 'Kahve yalnızca bir içecek değil; uzun ve özenli bir yolculuğun sonucu. Çekirdekler yıkanır, kurutulur ve kavrulmaya hazırlanır.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/neden-biz/' ) ); ?>"><?php esc_html_e( 'Hikâyemizi oku', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
