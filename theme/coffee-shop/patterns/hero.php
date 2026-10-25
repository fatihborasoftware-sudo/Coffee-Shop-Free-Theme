<?php
/**
 * Title: Hero
 * Slug: coffee-shop/hero
 * Categories: coffee-shop, banner
 * Description: Full-screen video hero with a two-colour headline and two buttons. On the front page two more clips crossfade in.
 *
 * @package coffee-shop
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/video/hero.mp4' ) ); ?>","dimRatio":80,"customOverlayColor":"#0a0806","isUserOverlayColor":true,"backgroundType":"video","minHeight":92,"minHeightUnit":"vh","contentPosition":"center left","isDark":true,"align":"full","className":"coffee-hero","style":{"spacing":{"padding":{"top":"clamp(5rem, 11vw, 9rem)","bottom":"clamp(9rem, 16vw, 12rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left coffee-hero" style="padding-top:clamp(5rem, 11vw, 9rem);padding-bottom:clamp(9rem, 16vw, 12rem);min-height:92vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#0a0806"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_theme_file_uri( 'assets/video/hero.mp4' ) ); ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color"><?php esc_html_e( 'Özenle seçilmiş kahve çekirdekleri', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses( __( 'Tutkuyla Demlenen, <span class="rose">Keyifle Sunulan Kahve</span>', 'coffee-shop' ), array( 'span' => array( 'class' => array() ) ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"coffee-lead","fontSize":"large"} -->
<p class="coffee-lead has-large-font-size"><?php esc_html_e( 'Her fincanda bir hikâye var. Taze kavrulmuş Midnight Bloom harmanlarıyla günün temposuna kısa bir mola ver.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/neden-biz/' ) ); ?>"><?php esc_html_e( 'Hakkında', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>"><?php esc_html_e( 'Alışverişe Başla', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
