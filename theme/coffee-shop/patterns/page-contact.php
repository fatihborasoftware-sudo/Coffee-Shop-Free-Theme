<?php
/**
 * Title: İletişim page
 * Slug: coffee-shop/page-contact
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Contact page: photo banner, contact cards with a framed photo and a message form (Contact Form 7 form titled "İletişim"). Replace the [bracketed] placeholders. Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_cards = array(
	array( '<path d="M12 21s-7-6.2-7-11a7 7 0 0 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/>', __( 'Adres', 'coffee-shop' ), __( '[Dükkan adresi]', 'coffee-shop' ) ),
	array( '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2"/>', __( 'Telefon', 'coffee-shop' ), __( '[Telefon numarası]', 'coffee-shop' ) ),
	array( '<rect x="3" y="5" width="18" height="14"/><path d="m3 7 9 6 9-6"/>', __( 'E-posta', 'coffee-shop' ), __( '[E-posta adresi]', 'coffee-shop' ) ),
	array( '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>', __( 'Çalışma saatleri', 'coffee-shop' ), __( 'Her gün 08:00 – 22:00', 'coffee-shop' ) ),
);

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'cafe-arches.webp',
	__( 'İletişim', 'coffee-shop' ),
	'<!-- wp:heading {"level":1,"textColor":"white"} --><h1 class="wp-block-heading has-white-color has-text-color">' . wp_kses( __( 'Bir kahve <span class="rose">içelim mi?</span>', 'coffee-shop' ), array( 'span' => array( 'class' => array() ) ) ) . '</h1><!-- /wp:heading -->'
	. '<!-- wp:paragraph {"className":"coffee-lead"} --><p class="coffee-lead">' . esc_html__( 'Siparişin, bayilik ya da sadece kahve hakkında bir sorun varsa yaz, sana dönelim.', 'coffee-shop' ) . '</p><!-- /wp:paragraph -->'
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"}}},"backgroundColor":"light","textColor":"body-dark","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-body-dark-color has-light-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"clamp(2rem, 5vw, 4rem)"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"40%","style":{"spacing":{"blockGap":"0.9rem"}}} -->
<div class="wp-block-column" style="flex-basis:40%">
<?php foreach ( $coffee_cards as $coffee_card ) : ?>
<!-- wp:group {"className":"coffee-info","style":{"spacing":{"blockGap":"1rem","padding":{"top":"1.1rem","right":"1.2rem","bottom":"1.1rem","left":"1.2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group coffee-info" style="padding-top:1.1rem;padding-right:1.2rem;padding-bottom:1.1rem;padding-left:1.2rem">
<!-- wp:html -->
<span class="coffee-ic"><svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $coffee_card[0]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths. ?></svg></span>
<!-- /wp:html -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}}} -->
<p style="font-weight:500"><?php echo esc_html( $coffee_card[1] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"color":{"text":"#6B6460"},"typography":{"fontSize":"0.9rem"}}} -->
<p class="has-text-color" style="color:#6B6460;font-size:0.9rem"><?php echo esc_html( $coffee_card[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"coffee-framed","style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
<figure class="wp-block-image size-full coffee-framed" style="margin-top:1.5rem"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/coffee-bar.webp' ) ); ?>" alt="<?php esc_attr_e( 'Coffee kafe tezgâhı', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
<!-- wp:column {"className":"coffee-form coffee-reveal","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column coffee-form coffee-reveal">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Bize yazın', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:shortcode -->
[contact-form-7 title="İletişim"]
<!-- /wp:shortcode -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
