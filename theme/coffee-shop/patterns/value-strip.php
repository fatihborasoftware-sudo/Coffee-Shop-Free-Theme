<?php
/**
 * Title: Value strip
 * Slug: coffee-shop/value-strip
 * Categories: coffee-shop, featured
 * Description: Four short promises with line icons on cream.
 *
 * @package coffee-shop
 */

$coffee_values = array(
	array( '<path d="M24 6c8 6 8 30 0 36-8-6-8-30 0-36z"/><path d="M24 8c-3 10 3 22 0 32"/>', __( 'Taze kavrum', 'coffee-shop' ), __( 'Kavrulduktan sonra 48 saat içinde yola çıkar.', 'coffee-shop' ) ),
	array( '<path d="M4 14h26v18H4zM30 20h8l6 6v6H30z"/><circle cx="12" cy="35" r="3"/><circle cx="36" cy="35" r="3"/>', __( 'Ücretsiz kargo', 'coffee-shop' ), __( '900,00 TL ve üzeri siparişlerde.', 'coffee-shop' ) ),
	array( '<path d="M10 18h24v10a12 12 0 0 1-24 0zM34 21h3a5 5 0 0 1 0 10h-4M8 42h30"/>', __( 'Her demleme için', 'coffee-shop' ), __( 'Filtre, espresso, French press, moka pot.', 'coffee-shop' ) ),
	array( '<path d="M8 40V18l16-10 16 10v22z"/><path d="M18 40V26h12v14"/>', __( 'Bayilik', 'coffee-shop' ), __( 'Kafeniz için toptan fiyat ve destek.', 'coffee-shop' ) ),
);
?>
<!-- wp:group {"align":"full","className":"coffee-values","style":{"spacing":{"padding":{"top":"clamp(3rem, 6vw, 5rem)","bottom":"clamp(2.5rem, 5vw, 4rem)"}}},"backgroundColor":"light","textColor":"body-dark","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull coffee-values has-body-dark-color has-light-background-color has-text-color has-background" style="padding-top:clamp(3rem, 6vw, 5rem);padding-bottom:clamp(2.5rem, 5vw, 4rem)">
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group">
<?php foreach ( $coffee_values as $coffee_value ) : ?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.9rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:html -->
<svg viewBox="0 0 48 48" aria-hidden="true"><?php echo $coffee_value[0]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG paths. ?></svg>
<!-- /wp:html -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0.15rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.15rem"}}} -->
<h3 class="wp-block-heading" style="font-size:1.15rem"><?php echo esc_html( $coffee_value[1] ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"color":{"text":"#6B6460"},"typography":{"fontSize":"0.85rem"}}} -->
<p class="has-text-color" style="color:#6B6460;font-size:0.85rem"><?php echo esc_html( $coffee_value[2] ); ?></p>
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
