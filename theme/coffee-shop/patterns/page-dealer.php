<?php
/**
 * Title: Bayilik page
 * Slug: coffee-shop/page-dealer
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Dealer page: barista video banner, four perks on navy and the application form (Contact Form 7 form titled "Bayilik başvurusu"). Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_perks = array(
	array( '<path d="M6 30 24 12l18 18M14 26v14h20V26"/>', __( 'Toptan fiyat', 'coffee-shop' ), __( 'Hacme göre kademeli bayi fiyatları ve ödeme vadesi.', 'coffee-shop' ) ),
	array( '<path d="M4 14h26v18H4zM30 20h8l6 6v6H30z"/>', __( 'Düzenli taze gönderim', 'coffee-shop' ), __( 'Haftalık ya da iki haftalık planla, her zaman taze kavrum.', 'coffee-shop' ) ),
	array( '<path d="M10 18h24v10a12 12 0 0 1-24 0zM34 21h3a5 5 0 0 1 0 10h-4"/>', __( 'Demleme desteği', 'coffee-shop' ), __( 'Barista eğitimi ve reçete kartları ekibinize özel.', 'coffee-shop' ) ),
	array( '<rect x="8" y="8" width="32" height="32"/><path d="M8 18h32"/>', __( 'Marka materyalleri', 'coffee-shop' ), __( 'Menü kartı, bardak ve tabela tasarımları.', 'coffee-shop' ) ),
);
$coffee_video = esc_url( get_theme_file_uri( 'assets/video/barista.mp4' ) );
?>
<!-- wp:cover {"url":"<?php echo $coffee_video; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above. ?>","dimRatio":80,"customOverlayColor":"#0a0806","isUserOverlayColor":true,"backgroundType":"video","minHeight":520,"contentPosition":"center left","isDark":true,"align":"full","className":"coffee-banner coffee-video-banner","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4.5rem, 10vw, 8rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left coffee-banner coffee-video-banner" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4.5rem, 10vw, 8rem);min-height:520px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#0a0806"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo $coffee_video; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped above. ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"coffee-crumbs"} -->
<p class="coffee-crumbs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Anasayfa', 'coffee-shop' ); ?></a> / <?php esc_html_e( 'Bayilik', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php echo wp_kses( __( 'Midnight Bloom\'u <span class="rose">kendi menünde sun</span>', 'coffee-shop' ), array( 'span' => array( 'class' => array() ) ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"coffee-lead","fontSize":"large"} -->
<p class="coffee-lead has-large-font-size"><?php esc_html_e( 'Kafe, restoran, ofis ya da şarküteri: harmanlarımızı müşterilerinizle buluşturmak için başvurun, iki iş günü içinde dönüş yapalım.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
<!-- wp:button {"className":"coffee-open-dealer"} -->
<div class="wp-block-button coffee-open-dealer"><a class="wp-block-button__link wp-element-button" href="#basvuru"><?php esc_html_e( 'Hızlı Başvuru', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#basvuru"><?php esc_html_e( 'Detaylı Form', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"}}},"backgroundColor":"ink","textColor":"white","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-ink-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:group {"className":"coffee-section-head","style":{"spacing":{"blockGap":"0.6rem","margin":{"bottom":"clamp(2rem, 4vw, 3rem)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group coffee-section-head" style="margin-bottom:clamp(2rem, 4vw, 3rem)">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color"><?php esc_html_e( 'Bayimiz ol', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Bayilerimize neler sunuyoruz?', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"className":"coffee-perks","style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group coffee-perks">
<?php foreach ( $coffee_perks as $coffee_perk ) : ?>
<!-- wp:group {"className":"coffee-perk","style":{"spacing":{"blockGap":"0.6rem","padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group coffee-perk" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:html -->
<svg viewBox="0 0 48 48" aria-hidden="true"><?php echo $coffee_perk[0]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths. ?></svg>
<!-- /wp:html -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.5rem"><?php echo esc_html( $coffee_perk[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
<p style="font-size:0.9rem"><?php echo esc_html( $coffee_perk[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"basvuru","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"}}},"backgroundColor":"light","textColor":"body-dark","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div id="basvuru" class="wp-block-group alignfull has-body-dark-color has-light-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"clamp(2rem, 5vw, 4rem)"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"coffee-framed"} -->
<figure class="wp-block-image size-full coffee-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/coffee-bar.webp' ) ); ?>" alt="<?php esc_attr_e( 'Coffee yazılı kafe tezgâhı', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"coffee-form coffee-reveal","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column coffee-form coffee-reveal">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Bayilik başvurusu', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:shortcode -->
[contact-form-7 title="Bayilik başvurusu"]
<!-- /wp:shortcode -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
