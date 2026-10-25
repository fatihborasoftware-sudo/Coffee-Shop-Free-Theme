<?php
/**
 * Title: Dealer video band
 * Slug: coffee-shop/dealer-banner
 * Categories: coffee-shop, call-to-action
 * Description: Barista video under a coffee-brown shade, with a dealer call to action that opens the application popup.
 *
 * @package coffee-shop
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/video/barista.mp4' ) ); ?>","dimRatio":80,"customOverlayColor":"#966041","isUserOverlayColor":true,"backgroundType":"video","isDark":true,"align":"full","className":"coffee-vband","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 9vw, 7rem)","bottom":"clamp(4.5rem, 9vw, 7rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull coffee-vband" style="padding-top:clamp(4.5rem, 9vw, 7rem);padding-bottom:clamp(4.5rem, 9vw, 7rem)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#966041"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_theme_file_uri( 'assets/video/barista.mp4' ) ); ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"coffee-reveal","style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group coffee-reveal">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"white"} -->
<p class="coffee-eyebrow has-white-color has-text-color"><?php esc_html_e( 'Bayimiz ol', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Kafeniz için Midnight Bloom', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#ffffffe6"}}} -->
<p class="has-text-color" style="color:#ffffffe6"><?php esc_html_e( 'Harmanlarımızı kendi menünüzde sunun. Toptan fiyat, düzenli taze gönderim, barista eğitimi ve marka materyalleri.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"coffee-open-dealer"} -->
<div class="wp-block-button coffee-open-dealer"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/bayilik/' ) ); ?>"><?php esc_html_e( 'Bayilik Başvurusu', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
