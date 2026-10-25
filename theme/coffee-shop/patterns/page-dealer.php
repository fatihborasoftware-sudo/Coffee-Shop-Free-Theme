<?php
/**
 * Title: Bayilik page
 * Slug: coffee-shop/page-dealer
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Dealer page: hero, benefits and an application form (Contact Form 7 form titled "Bayilik başvurusu"). Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_benefits = array(
	array( __( 'Toptan fiyatlandırma', 'coffee-shop' ), __( '[Bayi fiyat avantajınızı yazın]', 'coffee-shop' ) ),
	array( __( 'Düzenli taze gönderim', 'coffee-shop' ), __( '[Gönderim sıklığı ve minimum sipariş]', 'coffee-shop' ) ),
	array( __( 'Demleme desteği', 'coffee-shop' ), __( '[Barista eğitimi veya tarif desteği varsa]', 'coffee-shop' ) ),
	array( __( 'Marka materyalleri', 'coffee-shop' ), __( '[Menü kartı, bardak, tabela gibi destekler]', 'coffee-shop' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3.5rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'Bayimiz ol', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Midnight Bloom\'u kendi menünde sun.', 'coffee-shop' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Kafe, restoran, ofis ya da şarküteri: harmanlarımızı müşterilerinle buluşturmak için başvurunu bırak, sana dönelim.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#basvuru"><?php esc_html_e( 'Başvuru formuna git', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:cover {"dimRatio":100,"customOverlayColor":"#2D3748","isUserOverlayColor":true,"minHeight":380,"style":{"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:24px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#2D3748"></span><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","textColor":"muted","fontSize":"small"} -->
<p class="has-text-align-center has-muted-color has-text-color has-small-font-size"><?php esc_html_e( '[Kafe tezgâhı fotoğrafı]', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div></div>
<!-- /wp:cover -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"2.25rem"},"border":{"top":{"color":"var:preset|color|surface","width":"1px"},"bottom":{"color":"var:preset|color|surface","width":"1px"}}},"backgroundColor":"deep","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-deep-background-color has-background" style="border-top-color:var(--wp--preset--color--surface);border-top-width:1px;border-bottom-color:var(--wp--preset--color--surface);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Bayilerimize neler sunuyoruz?', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_benefits as $coffee_benefit ) : ?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"},"blockGap":"0.5rem"},"border":{"color":"var:preset|color|surface","width":"1px"}},"backgroundColor":"ink"} -->
<div class="wp-block-group is-style-card has-border-color has-ink-background-color has-background" style="border-color:var(--wp--preset--color--surface);border-width:1px;padding-top:1.75rem;padding-right:1.75rem;padding-bottom:1.75rem;padding-left:1.75rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem"><?php echo esc_html( $coffee_benefit[0] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $coffee_benefit[1] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","anchor":"basvuru","className":"coffee-form","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"1.5rem"}},"backgroundColor":"light","textColor":"ink","layout":{"type":"constrained","contentSize":"820px"}} -->
<div id="basvuru" class="wp-block-group alignfull coffee-form has-ink-color has-light-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Bayilik başvurusu', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:shortcode -->
[contact-form-7 title="Bayilik başvurusu"]
<!-- /wp:shortcode -->
</div>
<!-- /wp:group -->
