<?php
/**
 * Title: Hero
 * Slug: coffee-shop/hero
 * Categories: coffee-shop, banner
 * Description: Headline, intro, two buttons and the cup illustration.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3.5rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'Özenle seçilmiş kahve çekirdekleri', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Tutkuyla demlenen, keyifle sunulan kahve.', 'coffee-shop' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Her fincanda bir hikâye var. Günün temposuna kısa bir mola ver, kahveni yudumla ve kendini evinde hisset.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>"><?php esc_html_e( 'Alışverişe başla', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/bayilik/' ) ); ?>"><?php esc_html_e( 'Bayimiz ol', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","className":"coffee-hero-art"} -->
<figure class="wp-block-image aligncenter size-full coffee-hero-art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/cup.svg' ) ); ?>" alt="<?php esc_attr_e( 'Bir fincan kahve', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
