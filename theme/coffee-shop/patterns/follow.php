<?php
/**
 * Title: Follow us
 * Slug: coffee-shop/follow
 * Categories: coffee-shop, call-to-action
 * Description: "Bizi Takip Edin" band on the coffee doodle pattern with social links.
 *
 * @package coffee-shop
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/doodle.webp' ) ); ?>","dimRatio":80,"customOverlayColor":"#1A202C","isUserOverlayColor":true,"isDark":true,"align":"full","className":"coffee-follow","style":{"spacing":{"padding":{"top":"clamp(4rem, 8vw, 6rem)","bottom":"clamp(4rem, 8vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull coffee-follow" style="padding-top:clamp(4rem, 8vw, 6rem);padding-bottom:clamp(4rem, 8vw, 6rem)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#1A202C"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/doodle.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"coffee-reveal","style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group coffee-reveal">
<!-- wp:heading {"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Bizi Takip Edin', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#ffffffcc"}}} -->
<p class="has-text-color" style="color:#ffffffcc"><?php esc_html_e( 'Yeni harmanlar, demleme ipuçları ve kampanyalar önce sosyal medyada.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","size":"has-large-icon-size","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"0.7rem"}}}} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-default">
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
