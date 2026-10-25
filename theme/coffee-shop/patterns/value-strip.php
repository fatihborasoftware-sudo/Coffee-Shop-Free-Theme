<?php
/**
 * Title: Value strip
 * Slug: coffee-shop/value-strip
 * Categories: coffee-shop, features
 * Description: Three short benefits on a darker band.
 *
 * @package coffee-shop
 */

$coffee_items = array(
	array( __( 'Seçilmiş çekirdekler', 'coffee-shop' ), __( 'Orta koyu kavrulmuş, dengeli harmanlar.', 'coffee-shop' ) ),
	array( __( 'Ustalıkla hazırlanan tarifler', 'coffee-shop' ), __( 'Filtreden espressoya, her demleme için.', 'coffee-shop' ) ),
	array( __( 'Ücretsiz kargo', 'coffee-shop' ), __( '900,00 TL ve üzeri siparişlerde.', 'coffee-shop' ) ),
);
?>
<!-- wp:group {"align":"full","className":"coffee-values","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem"}},"border":{"top":{"color":"var:preset|color|surface","width":"1px"},"bottom":{"color":"var:preset|color|surface","width":"1px"}}},"backgroundColor":"deep","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull coffee-values has-deep-background-color has-background" style="border-top-color:var(--wp--preset--color--surface);border-top-width:1px;border-bottom-color:var(--wp--preset--color--surface);border-bottom-width:1px;padding-top:2.5rem;padding-bottom:2.5rem">
<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","minimumColumnWidth":"15rem"}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_items as $coffee_item ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.125rem"><?php echo esc_html( $coffee_item[0] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"textColor":"muted","fontSize":"small"} -->
<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $coffee_item[1] ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
