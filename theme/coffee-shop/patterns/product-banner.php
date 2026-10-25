<?php
/**
 * Title: Product banner
 * Slug: coffee-shop/product-banner
 * Inserter: no
 *
 * @package coffee-shop
 */

$coffee_url = esc_url( get_theme_file_uri( 'assets/images/coffee-bags-shelf.webp' ) );
?>
<!-- wp:cover {"url":"<?php echo $coffee_url; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above. ?>","dimRatio":80,"customOverlayColor":"#0a0806","isUserOverlayColor":true,"minHeight":220,"contentPosition":"center left","isDark":true,"align":"full","className":"coffee-banner coffee-product-banner","style":{"spacing":{"padding":{"top":"clamp(2.5rem, 5vw, 3.5rem)","bottom":"clamp(2.5rem, 5vw, 3.5rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left coffee-banner coffee-product-banner" style="padding-top:clamp(2.5rem, 5vw, 3.5rem);padding-bottom:clamp(2.5rem, 5vw, 3.5rem);min-height:220px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#0a0806"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo $coffee_url; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above. ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"coffee-banner-word"} -->
<p class="coffee-banner-word"><?php esc_html_e( 'Mağaza', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:woocommerce/breadcrumbs {"className":"coffee-crumbs"} /-->
</div></div>
<!-- /wp:cover -->
