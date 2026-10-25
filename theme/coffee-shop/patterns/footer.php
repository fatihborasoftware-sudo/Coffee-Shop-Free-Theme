<?php
/**
 * Title: Footer
 * Slug: coffee-shop/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package coffee-shop
 */

$coffee_icon = array(
	'pin'   => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>',
	'phone' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>',
	'clock' => '<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>',
);
$coffee_trust = array(
	array( '<path d="M12 3c3 3 4 6 0 9s-3 6 0 9M8 6c-2 2-2 4 0 6M16 12c2 2 2 4 0 6"/>', __( 'Haftalık taze kavrum', 'coffee-shop' ), __( 'Siparişe göre kavrulur', 'coffee-shop' ) ),
	array( '<path d="M3 7h11v9H3zM14 10h4l3 3v3h-7z"/><circle cx="7" cy="18" r="1.6"/><circle cx="17" cy="18" r="1.6"/>', __( '₺900 üzeri kargo bedava', 'coffee-shop' ), __( 'Aynı gün kargoda', 'coffee-shop' ) ),
	array( '<rect x="4" y="10" width="16" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/>', __( 'Güvenli ödeme', 'coffee-shop' ), __( '256-bit SSL · 3D Secure', 'coffee-shop' ) ),
	array( '<path d="M4 12a8 8 0 1 0 2.4-5.7L4 8.6"/><path d="M4 4v4.6h4.6"/>', __( '14 gün iade', 'coffee-shop' ), __( 'Koşulsuz, kolay iade', 'coffee-shop' ) ),
);
$coffee_link = function ( $label, $path ) {
	return '<li><a href="' . esc_url( home_url( $path ) ) . '">' . esc_html( $label ) . '</a></li>';
};
?>
<!-- wp:group {"className":"coffee-footer","style":{"spacing":{"padding":{"top":"clamp(5rem, 9vw, 7rem)","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"deep","textColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group coffee-footer has-white-color has-deep-background-color has-text-color has-background" style="padding-top:clamp(5rem, 9vw, 7rem);padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group">
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/roasted-beans-macro.webp' ) ); ?>","dimRatio":100,"overlayColor":"brown","isUserOverlayColor":true,"isDark":true,"className":"coffee-news","style":{"spacing":{"padding":{"top":"clamp(1.8rem, 4vw, 2.8rem)","bottom":"clamp(1.8rem, 4vw, 2.8rem)","left":"clamp(1.4rem, 4vw, 3rem)","right":"clamp(1.4rem, 4vw, 3rem)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover coffee-news" style="padding-top:clamp(1.8rem, 4vw, 2.8rem);padding-right:clamp(1.4rem, 4vw, 3rem);padding-bottom:clamp(1.8rem, 4vw, 2.8rem);padding-left:clamp(1.4rem, 4vw, 3rem)"><span aria-hidden="true" class="wp-block-cover__background has-brown-background-color has-background-dim-100 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/roasted-beans-macro.webp' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"0.6rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
<!-- wp:paragraph {"className":"coffee-eyebrow"} -->
<p class="coffee-eyebrow"><?php esc_html_e( 'Kahve Kulübü', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4.5vw, 3rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(2rem, 4.5vw, 3rem)"><?php echo wp_kses( __( 'İlk siparişinde <em>%10</em> indirim', 'coffee-shop' ), array( 'em' => array() ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#ffffffd9"},"typography":{"fontSize":"0.95rem"}}} -->
<p class="has-text-color" style="color:#ffffffd9;font-size:0.95rem"><?php esc_html_e( 'Üye ol; yeni kavrumlar, demleme rehberleri ve kulübe özel kampanyalar ayda iki kez e-postanda.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/hesabim/' ) ); ?>"><?php esc_html_e( 'Kulübe Katıl', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"coffee-trust","style":{"spacing":{"margin":{"top":"clamp(2.5rem, 5vw, 3.5rem)"},"blockGap":"0","padding":{"bottom":"0.5rem"}}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group coffee-trust" style="margin-top:clamp(2.5rem, 5vw, 3.5rem);padding-bottom:0.5rem">
<?php foreach ( $coffee_trust as $coffee_item ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.9rem","padding":{"top":"1.4rem","bottom":"1.4rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:1.4rem;padding-bottom:1.4rem">
<!-- wp:html -->
<svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $coffee_item[0]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths. ?></svg>
<!-- /wp:html -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}}} -->
<p style="line-height:1.3"><strong style="font-family:var(--wp--preset--font-family--display);font-weight:400;font-size:1.05rem;letter-spacing:.02em"><?php echo esc_html( $coffee_item[1] ); ?></strong><br><span style="font-size:.8rem;color:#ffffff99"><?php echo esc_html( $coffee_item[2] ); ?></span></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:columns {"className":"coffee-fcols","style":{"spacing":{"padding":{"top":"clamp(3rem, 6vw, 4.5rem)","bottom":"clamp(2rem, 4vw, 3rem)"},"blockGap":{"left":"clamp(1.5rem, 4vw, 3.5rem)"}}}} -->
<div class="wp-block-columns coffee-fcols" style="padding-top:clamp(3rem, 6vw, 4.5rem);padding-bottom:clamp(2rem, 4vw, 3rem)">
<!-- wp:column {"width":"32%","style":{"spacing":{"blockGap":"1.2rem"}}} -->
<div class="wp-block-column" style="flex-basis:32%">
<!-- wp:site-logo {"width":190,"shouldSyncIcon":false} /-->
<!-- wp:paragraph {"style":{"color":{"text":"#ffffffb3"},"typography":{"fontSize":"0.92rem"}}} -->
<p class="has-text-color" style="color:#ffffffb3;font-size:0.92rem"><?php esc_html_e( 'Özenle seçilmiş çekirdekler, küçük partilerde kavrum ve tutkuyla demlenen her fincan.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"coffee-contact","style":{"color":{"text":"#ffffffd1"},"typography":{"fontSize":"0.88rem","lineHeight":"2"}}} -->
<p class="coffee-contact has-text-color" style="color:#ffffffd1;font-size:0.88rem;line-height:2"><?php echo $coffee_icon['pin']; // phpcs:ignore ?><?php esc_html_e( '[Dükkan adresi]', 'coffee-shop' ); ?><br><?php echo $coffee_icon['phone']; // phpcs:ignore ?><?php esc_html_e( '[Telefon numarası]', 'coffee-shop' ); ?><br><?php echo $coffee_icon['clock']; // phpcs:ignore ?><?php esc_html_e( 'Hafta içi 08:00–20:00 · Hafta sonu 10:00–22:00', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"0.55rem"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-default">
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%">
<!-- wp:heading {"level":2,"className":"coffee-fh"} -->
<h2 class="wp-block-heading coffee-fh"><?php esc_html_e( 'Alışveriş', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="coffee-links"><?php echo $coffee_link( __( 'Tüm kahveler', 'coffee-shop' ), '/magaza/' ) . $coffee_link( __( 'Sepetim', 'coffee-shop' ), '/sepet/' ) . $coffee_link( __( 'Ödeme', 'coffee-shop' ), '/odeme/' ) . $coffee_link( __( 'Mesafeli Satış Sözleşmesi', 'coffee-shop' ), '/mesafeli-satis-sozlesmesi/' ) . $coffee_link( __( 'Açık Rıza Metni', 'coffee-shop' ), '/acik-riza-metni/' ) . $coffee_link( __( 'K.V.K.K.', 'coffee-shop' ), '/kvkk/' ); // phpcs:ignore ?></ul>
<!-- /wp:html -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"18%"} -->
<div class="wp-block-column" style="flex-basis:18%">
<!-- wp:heading {"level":2,"className":"coffee-fh"} -->
<h2 class="wp-block-heading coffee-fh"><?php esc_html_e( 'Kurumsal', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:html -->
<ul class="coffee-links"><?php echo $coffee_link( __( 'Neden Biz?', 'coffee-shop' ), '/neden-biz/' ) . $coffee_link( __( 'Bayilik', 'coffee-shop' ), '/bayilik/' ) . $coffee_link( __( 'Blog', 'coffee-shop' ), '/blog/' ) . $coffee_link( __( 'İletişim', 'coffee-shop' ), '/iletisim/' ) . $coffee_link( __( 'Hesabım', 'coffee-shop' ), '/hesabim/' ); // phpcs:ignore ?></ul>
<!-- /wp:html -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%">
<!-- wp:heading {"level":2,"className":"coffee-fh"} -->
<h2 class="wp-block-heading coffee-fh"><?php esc_html_e( 'Son yazılar', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":3,"displayFeaturedImage":true,"featuredImageSizeSlug":"thumbnail"} /-->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"coffee-bigword","layout":{"type":"default"}} -->
<div class="wp-block-group coffee-bigword">
<!-- wp:paragraph -->
<p aria-hidden="true"><?php echo esc_html( mb_strtoupper( get_bloginfo( 'name' ) ? get_bloginfo( 'name' ) : 'Coffee', 'UTF-8' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/takeaway.webp' ) ); ?>" alt=""/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"coffee-legal","style":{"spacing":{"padding":{"top":"1.1rem","bottom":"1.1rem"}},"color":{"background":"#0B0E13","text":"#ffffff99"},"typography":{"fontSize":"0.8rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group coffee-legal has-text-color has-background" style="color:#ffffff99;background-color:#0B0E13;padding-top:1.1rem;padding-bottom:1.1rem;font-size:0.8rem">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?> · <?php esc_html_e( 'Tüm hakları saklıdır.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:html -->
<div style="display:flex;gap:1rem;align-items:center"><p class="coffee-pay" aria-label="<?php esc_attr_e( 'Ödeme yöntemleri', 'coffee-shop' ); ?>"><span>VISA</span><span>MASTERCARD</span><span>TROY</span></p><button type="button" class="coffee-totop" aria-label="<?php esc_attr_e( 'Yukarı çık', 'coffee-shop' ); ?>"><svg viewBox="0 0 24 24"><path d="m6 15 6-6 6 6"/></svg></button></div>
<!-- /wp:html -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
