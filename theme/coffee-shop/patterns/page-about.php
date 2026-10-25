<?php
/**
 * Title: Neden Biz? page
 * Slug: coffee-shop/page-about
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Full about page: headline, wide photo, bean-to-cup steps and brand story. Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_steps = array(
	array( '01', __( 'Hasat', 'coffee-shop' ), __( 'Yolculuk, tropikal iklimlerde yetişen kahve ağaçlarında başlar.', 'coffee-shop' ) ),
	array( '02', __( 'Yıkama ve kurutma', 'coffee-shop' ), __( 'Hasat edilen çekirdekler yıkanır, kurutulur ve kavrulmaya hazırlanır.', 'coffee-shop' ) ),
	array( '03', __( 'Kavurma', 'coffee-shop' ), __( 'Orta koyu kavrum: yoğun ama dengeli, yorucu olmayan bir içim.', 'coffee-shop' ) ),
	array( '04', __( 'Fincan', 'coffee-shop' ), __( 'Kahveni yudumla, günün temposuna kısa bir mola ver.', 'coffee-shop' ) ),
);
$coffee_values = array(
	array( __( 'Seçilmiş çekirdek', 'coffee-shop' ), __( 'Her harman özenle seçilir.', 'coffee-shop' ) ),
	array( __( 'Usta tarifler', 'coffee-shop' ), __( 'Her demleme için öneri.', 'coffee-shop' ) ),
	array( __( 'Taze gönderim', 'coffee-shop' ), __( '[Kavurma sonrası gönderim süresi]', 'coffee-shop' ) ),
	array( __( 'Ücretsiz kargo', 'coffee-shop' ), __( '900,00 TL ve üzeri.', 'coffee-shop' ) ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"},"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'Neden Biz?', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"layout":{"selfStretch":"fit"}}} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Kahve bir içecekten fazlası; özenli bir yolculuk.', 'coffee-shop' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size"><?php esc_html_e( 'Özenle seçilmiş kahve çekirdekleri, ustalıkla hazırlanan tarifler ve sıcak bir atmosfer. Her fincanda bir hikâye var.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","className":"coffee-framed-art"} -->
<figure class="wp-block-image alignwide size-full coffee-framed-art"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/beans-wide.svg' ) ); ?>" alt="<?php esc_attr_e( 'Kavrulmuş kahve çekirdekleri', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"2.5rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Çekirdekten fincana', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_steps as $coffee_step ) : ?>
<!-- wp:group {"className":"coffee-step","style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group coffee-step">
<!-- wp:paragraph {"textColor":"caramel","fontFamily":"display","style":{"typography":{"fontSize":"1.75rem","fontWeight":"600"}}} -->
<p class="has-caramel-color has-text-color has-display-font-family" style="font-size:1.75rem;font-weight:600"><?php echo esc_html( $coffee_step[0] ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.25rem"><?php echo esc_html( $coffee_step[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $coffee_step[2] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"light","textColor":"ink","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-ink-color has-light-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3.5rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"brown","fontSize":"small"} -->
<p class="coffee-eyebrow has-brown-color has-text-color has-small-font-size"><?php esc_html_e( 'Hakkımızda', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Kendini evinde hissettiren kahve', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"body-dark"} -->
<p class="has-body-dark-color has-text-color"><?php esc_html_e( '[Kuruluş hikâyeniz: ne zaman ve neden başladınız, kahveyi nerede kavuruyorsunuz, çekirdekleri hangi bölgelerden alıyorsunuz.]', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_values as $coffee_value ) : ?>
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"},"blockGap":"0.375rem"}},"backgroundColor":"white"} -->
<div class="wp-block-group is-style-card has-white-background-color has-background" style="padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.125rem"><?php echo esc_html( $coffee_value[0] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"slate","fontSize":"small"} -->
<p class="has-slate-color has-text-color has-small-font-size"><?php echo esc_html( $coffee_value[1] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"coffee-shop/dealer-banner"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
