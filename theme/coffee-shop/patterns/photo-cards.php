<?php
/**
 * Title: Tilted photo cards
 * Slug: coffee-shop/photo-cards
 * Categories: coffee-shop, gallery
 * Description: Three white-framed, slightly tilted photo cards that overlap the section above.
 *
 * @package coffee-shop
 */

$coffee_cards = array(
	array( 'roast.webp', __( 'Tavada kavrulan kahve çekirdekleri', 'coffee-shop' ), __( 'Tutkuyla Demlenen', 'coffee-shop' ), __( 'Detay', 'coffee-shop' ), '/neden-biz/', '' ),
	array( 'cup-hand.webp', __( 'Elde tutulan karton kahve bardağı', 'coffee-shop' ), __( 'Her fincanda bir hikâye var', 'coffee-shop' ), __( 'Bayimiz Ol!', 'coffee-shop' ), '/bayilik/', 'is-style-brown' ),
	array( 'double-shot.webp', __( 'Makineden iki fincana akan espresso', 'coffee-shop' ), __( 'Özenle seçilmiş kahve çekirdekleri', 'coffee-shop' ), __( 'Neden Biz?', 'coffee-shop' ), '/neden-biz/', '' ),
);
?>
<!-- wp:group {"align":"full","className":"coffee-tilts","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull coffee-tilts" style="padding-top:0;padding-bottom:0">
<!-- wp:group {"style":{"spacing":{"blockGap":"clamp(1rem, 2.5vw, 2rem)"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_cards as $coffee_card ) : ?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $coffee_card[0] ) ); ?>","alt":"<?php echo esc_attr( $coffee_card[1] ); ?>","dimRatio":70,"customOverlayColor":"#000000","isUserOverlayColor":true,"contentPosition":"bottom left","isDark":true,"className":"coffee-tilt","style":{"spacing":{"padding":{"top":"1.2rem","bottom":"1.2rem","left":"1.2rem","right":"1.2rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left coffee-tilt" style="padding-top:1.2rem;padding-right:1.2rem;padding-bottom:1.2rem;padding-left:1.2rem"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim" style="background-color:#000000"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr( $coffee_card[1] ); ?>" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $coffee_card[0] ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":3,"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color"><?php echo esc_html( $coffee_card[2] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"<?php echo esc_attr( $coffee_card[5] ); ?>","style":{"spacing":{"padding":{"top":"0.65rem","bottom":"0.65rem","left":"1.1rem","right":"1.1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
<div class="wp-block-button has-custom-font-size <?php echo esc_attr( $coffee_card[5] ); ?>" style="font-size:0.95rem"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( $coffee_card[4] ) ); ?>" style="padding-top:0.65rem;padding-right:1.1rem;padding-bottom:0.65rem;padding-left:1.1rem"><?php echo esc_html( $coffee_card[3] ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
