<?php
/**
 * Title: İletişim page
 * Slug: coffee-shop/page-contact
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Contact page: contact cards, a form (Contact Form 7 form titled "İletişim") and a map slot. Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_cards = array(
	array( __( 'Adres', 'coffee-shop' ), __( '[Dükkan adresi]', 'coffee-shop' ) ),
	array( __( 'Telefon', 'coffee-shop' ), __( '[Telefon numarası]', 'coffee-shop' ) ),
	array( __( 'E-posta', 'coffee-shop' ), __( '[E-posta adresi]', 'coffee-shop' ) ),
	array( __( 'Çalışma saatleri', 'coffee-shop' ), __( '[Hafta içi / hafta sonu saatleri]', 'coffee-shop' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"3rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'İletişim', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Bir kahve içelim mi?', 'coffee-shop' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Siparişin, bayilik ya da sadece kahve hakkında bir sorun varsa yaz, sana dönelim.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"2rem"}}}} -->
<div class="wp-block-columns">
<!-- wp:column {"width":"38%","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column" style="flex-basis:38%">
<?php foreach ( $coffee_cards as $coffee_card ) : ?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.25rem"}},"backgroundColor":"surface"} -->
<div class="wp-block-group is-style-card has-surface-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}},"fontFamily":"body"} -->
<h2 class="wp-block-heading has-body-font-family" style="font-size:1rem;font-weight:600"><?php echo esc_html( $coffee_card[0] ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $coffee_card[1] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"62%"} -->
<div class="wp-block-column" style="flex-basis:62%">
<!-- wp:group {"className":"is-style-card coffee-form","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"2.25rem","right":"2.25rem"}}},"backgroundColor":"light","textColor":"ink"} -->
<div class="wp-block-group is-style-card coffee-form has-ink-color has-light-background-color has-text-color has-background" style="padding-top:2.25rem;padding-right:2.25rem;padding-bottom:2.25rem;padding-left:2.25rem">
<!-- wp:shortcode -->
[contact-form-7 title="İletişim"]
<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:cover {"dimRatio":100,"customOverlayColor":"#2D3748","isUserOverlayColor":true,"minHeight":360,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;min-height:360px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#2D3748"></span><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '[Harita: Google Maps yerleşimi]', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:group -->
