<?php
/**
 * Title: Neden Biz? page
 * Slug: coffee-shop/page-about
 * Categories: coffee-shop-pages
 * Post Types: page
 * Description: Full about page: photo banner, story with framed photos, four bean-to-cup steps, scrolling words and a roaster video band. Use with the "Full width page" template.
 *
 * @package coffee-shop
 */

$coffee_steps = array(
	array( 'coffee-cherries.webp', __( 'Dalında olgunlaşmış kahve kirazları', 'coffee-shop' ), __( 'Hasat', 'coffee-shop' ), __( 'Yolculuk tropikal iklimlerde yetişen kahve ağaçlarında başlar.', 'coffee-shop' ) ),
	array( 'roast.webp', __( 'Tavada kurutulan çekirdekler', 'coffee-shop' ), __( 'Yıkama ve kurutma', 'coffee-shop' ), __( 'Hasat edilen çekirdekler yıkanır, kurutulur ve kavurmaya hazırlanır.', 'coffee-shop' ) ),
	array( 'roaster.webp', __( 'Kavurma makinesinde dönen çekirdekler', 'coffee-shop' ), __( 'Kavurma', 'coffee-shop' ), __( 'Orta koyu kavrum: yoğun ama dengeli, yorucu olmayan bir içim.', 'coffee-shop' ) ),
	array( 'double-shot.webp', __( 'Fincana akan espresso', 'coffee-shop' ), __( 'Fincan', 'coffee-shop' ), __( 'Kahveni yudumla, günün temposuna kısa bir mola ver.', 'coffee-shop' ) ),
);

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'espresso-extraction.webp',
	__( 'Kurumsal', 'coffee-shop' ),
	'<!-- wp:heading {"level":1,"textColor":"white"} --><h1 class="wp-block-heading has-white-color has-text-color">' . wp_kses( __( 'Neden <span class="rose">Biz?</span>', 'coffee-shop' ), array( 'span' => array( 'class' => array() ) ) ) . '</h1><!-- /wp:heading -->'
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"}}},"backgroundColor":"white","textColor":"body-dark","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-body-dark-color has-white-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"clamp(2rem, 5vw, 4rem)"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","className":"coffee-reveal","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center coffee-reveal">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"brown"} -->
<p class="coffee-eyebrow has-brown-color has-text-color"><?php esc_html_e( 'Hikâyemiz', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Kendini evinde hissettiren kahve', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'İyi bir fincanın sadece çekirdekle değil, o çekirdeğe gösterilen özenle başladığına inanıyoruz. Çekirdeklerimizi güvendiğimiz üreticilerden seçiyor, küçük partiler halinde kavuruyor ve kavrulduktan sonra kısa sürede yola çıkarıyoruz.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Midnight Bloom serisi bu yaklaşımın sonucu: yoğun ama yorucu olmayan, sütle de sade de keyifle içilen beş harman.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-brown"} -->
<div class="wp-block-button is-style-brown"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>"><?php esc_html_e( 'Harmanları Keşfet', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"coffee-framed"} -->
<figure class="wp-block-image size-full coffee-framed"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/barista.webp' ) ); ?>" alt="<?php esc_attr_e( 'Barista espresso hazırlıyor', 'coffee-shop' ); ?>"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"}}},"backgroundColor":"light","textColor":"body-dark","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-body-dark-color has-light-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:group {"className":"coffee-section-head","style":{"spacing":{"blockGap":"0.6rem","margin":{"bottom":"clamp(2rem, 4vw, 3rem)"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group coffee-section-head" style="margin-bottom:clamp(2rem, 4vw, 3rem)">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"brown"} -->
<p class="coffee-eyebrow has-brown-color has-text-color"><?php esc_html_e( 'Süreç', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Çekirdekten fincana', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_steps as $coffee_i => $coffee_step ) : ?>
<!-- wp:group {"className":"coffee-step","style":{"spacing":{"blockGap":"0.4rem","padding":{"bottom":"1.3rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group coffee-step" style="padding-bottom:1.3rem">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $coffee_step[0] ) ); ?>" alt="<?php echo esc_attr( $coffee_step[1] ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:group {"style":{"spacing":{"padding":{"left":"1.2rem","right":"1.2rem","top":"0.6rem"},"blockGap":"0.3rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0.6rem;padding-right:1.2rem;padding-left:1.2rem">
<!-- wp:paragraph {"className":"coffee-num"} -->
<p class="coffee-num"><?php echo esc_html( (string) ( $coffee_i + 1 ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.4rem"><?php echo esc_html( $coffee_step[2] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#6B6460"},"typography":{"fontSize":"0.9rem"}}} -->
<p class="has-text-color" style="color:#6B6460;font-size:0.9rem"><?php echo esc_html( $coffee_step[3] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"coffee-marquee","style":{"spacing":{"padding":{"left":"0","right":"0"}}},"backgroundColor":"light","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull coffee-marquee has-light-background-color has-background" style="padding-right:0;padding-left:0">
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Dikkat • Alışkanlık yapabilir! • Dikkat • Alışkanlık yapabilir!', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/video/roaster.mp4' ) ); ?>","dimRatio":80,"customOverlayColor":"#966041","isUserOverlayColor":true,"backgroundType":"video","isDark":true,"align":"full","className":"coffee-vband","style":{"spacing":{"padding":{"top":"clamp(4.5rem, 9vw, 7rem)","bottom":"clamp(4.5rem, 9vw, 7rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull coffee-vband" style="padding-top:clamp(4.5rem, 9vw, 7rem);padding-bottom:clamp(4.5rem, 9vw, 7rem)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#966041"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_theme_file_uri( 'assets/video/roaster.mp4' ) ); ?>" data-object-fit="cover"></video><div class="wp-block-cover__inner-container">
<!-- wp:group {"className":"coffee-reveal","style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"constrained","contentSize":"560px","justifyContent":"left"}} -->
<div class="wp-block-group coffee-reveal">
<!-- wp:heading {"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e( 'Her fincanda bir hikâye var', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Bizimle tanışmanın en iyi yolu bir fincan Midnight Bloom.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/magaza/' ) ); ?>"><?php esc_html_e( 'Mağazaya Git', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
