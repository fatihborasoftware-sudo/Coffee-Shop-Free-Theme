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

$coffee_link = static function ( $path, $label ) {
	return sprintf( "<!-- wp:list-item -->\n<li><a href=\"%s\">%s</a></li>\n<!-- /wp:list-item -->\n", esc_url( home_url( $path ) ), esc_html( $label ) );
};
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"4.5rem","bottom":"2rem"},"blockGap":"3rem"},"border":{"top":{"color":"var:preset|color|surface","width":"1px"}},"elements":{"link":{"color":{"text":"var:preset|color|muted"},":hover":{"color":{"text":"var:preset|color|caramel"}}}}},"backgroundColor":"deep","textColor":"muted","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-muted-color has-deep-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--surface);border-top-width:1px;padding-top:4.5rem;padding-bottom:2rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"2.25rem"}},"layout":{"type":"grid","minimumColumnWidth":"11rem"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":180,"shouldSyncIcon":false} /-->
<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"700","fontSize":"1.375rem"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"fontFamily":"display"} /-->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Tutkuyla demlenen, keyifle sunulan kahve.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"light","iconColorValue":"#F7FAFC","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"1rem"}}}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"#","service":"instagram"} /-->
<!-- wp:social-link {"url":"#","service":"facebook"} /-->
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"youtube"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"className":"coffee-eyebrow","style":{"typography":{"fontSize":"0.875rem","fontFamily":"var:preset|font-family|body"}},"textColor":"light"} -->
<h2 class="wp-block-heading coffee-eyebrow has-light-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Alışveriş', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:list {"className":"coffee-plain-list","fontSize":"small"} -->
<ul class="wp-block-list coffee-plain-list has-small-font-size">
<?php echo $coffee_link( '/magaza/', __( 'Mağaza', 'coffee-shop' ) ) . $coffee_link( '/sepet/', __( 'Sepet', 'coffee-shop' ) ) . $coffee_link( '/hesabim/', __( 'Hesabım', 'coffee-shop' ) ) . $coffee_link( '/bayilik/', __( 'Bayilik', 'coffee-shop' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"className":"coffee-eyebrow","style":{"typography":{"fontSize":"0.875rem","fontFamily":"var:preset|font-family|body"}},"textColor":"light"} -->
<h2 class="wp-block-heading coffee-eyebrow has-light-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Sayfalar', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:list {"className":"coffee-plain-list","fontSize":"small"} -->
<ul class="wp-block-list coffee-plain-list has-small-font-size">
<?php echo $coffee_link( '/neden-biz/', __( 'Neden Biz?', 'coffee-shop' ) ) . $coffee_link( '/blog/', __( 'Blog', 'coffee-shop' ) ) . $coffee_link( '/iletisim/', __( 'İletişim', 'coffee-shop' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"className":"coffee-eyebrow","style":{"typography":{"fontSize":"0.875rem","fontFamily":"var:preset|font-family|body"}},"textColor":"light"} -->
<h2 class="wp-block-heading coffee-eyebrow has-light-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'Yasal', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:list {"className":"coffee-plain-list","fontSize":"small"} -->
<ul class="wp-block-list coffee-plain-list has-small-font-size">
<?php echo $coffee_link( '/mesafeli-satis-sozlesmesi/', __( 'Mesafeli Satış Sözleşmesi', 'coffee-shop' ) ) . $coffee_link( '/acik-riza-metni/', __( 'Açık Rıza Metni', 'coffee-shop' ) ) . $coffee_link( '/kvkk/', __( 'K.V.K.K.', 'coffee-shop' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":2,"className":"coffee-eyebrow","style":{"typography":{"fontSize":"0.875rem","fontFamily":"var:preset|font-family|body"}},"textColor":"light"} -->
<h2 class="wp-block-heading coffee-eyebrow has-light-color has-text-color" style="font-size:0.875rem"><?php esc_html_e( 'İletişim', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="line-height:2">[Adres]<br>[Telefon]<br>[E-posta]<br>[Çalışma saatleri]</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem"}},"border":{"top":{"color":"var:preset|color|surface","width":"1px"}}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-small-font-size" style="border-top-color:var(--wp--preset--color--surface);border-top-width:1px;padding-top:1.5rem">
<!-- wp:paragraph -->
<p>© <?php echo esc_html( gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'Tüm hakları saklıdır.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Güvenli ödeme · Hızlı kargo', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
