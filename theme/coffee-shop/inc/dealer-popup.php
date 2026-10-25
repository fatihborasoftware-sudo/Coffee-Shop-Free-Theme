<?php
/**
 * Floating "Bayimiz ol" badge and the dealer application popup.
 * The popup shows the Contact Form 7 form titled "Bayilik başvurusu" when it
 * exists, otherwise a link to the Bayilik page.
 *
 * @package coffee-shop
 */

$coffee_form = '';
if ( class_exists( 'WPCF7_ContactForm' ) ) {
	$coffee_found = WPCF7_ContactForm::find( array( 'title' => 'Bayilik başvurusu' ) );
	if ( $coffee_found ) {
		$coffee_form = do_shortcode( '[contact-form-7 id="' . (int) $coffee_found[0]->id() . '"]' );
	}
}
?>
<button type="button" class="coffee-bayi" aria-label="<?php esc_attr_e( 'Bayimiz ol: başvuru formunu aç', 'coffee-shop' ); ?>">
	<span class="disc"></span>
	<svg class="ring" viewBox="0 0 112 112" aria-hidden="true"><defs><path id="coffee-ringp" d="M56 56m-43 0a43 43 0 1 1 86 0a43 43 0 1 1-86 0"/></defs><text><textPath href="#coffee-ringp"><?php echo esc_html( sprintf( '%1$s • %2$s • %1$s •', __( 'BAYİMİZ OL', 'coffee-shop' ), mb_strtoupper( sprintf( /* translators: %s: site name */ __( 'Kafene %s', 'coffee-shop' ), get_bloginfo( 'name' ) ), 'UTF-8' ) ) ); ?></textPath></text></svg>
	<span class="core"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 9l1.5-5h15L21 9"/><path d="M3 9c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3c0 1.7 1.3 3 3 3s3-1.3 3-3"/><path d="M5 12v8h14v-8M10 20v-5h4v5"/></svg></span>
</button>

<div class="coffee-modal" hidden role="dialog" aria-modal="true" aria-labelledby="coffee-dm-title">
	<div class="scrim" data-close></div>
	<div class="card">
		<button type="button" class="mx" data-close aria-label="<?php esc_attr_e( 'Kapat', 'coffee-shop' ); ?>"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg></button>
		<div class="mh">
			<span class="mi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="14" rx="2"/><path d="M4 9h16M8 13h8M8 16h5"/></svg></span>
			<h2 id="coffee-dm-title"><?php echo wp_kses( __( 'Bayimiz <em>olun</em>', 'coffee-shop' ), array( 'em' => array() ) ); ?></h2>
			<p class="sub">
				<?php
				/* translators: %s: site name */
				echo wp_kses( sprintf( __( '<b>%s</b> ailesine katılın, taze kavrumu kendi menünüzde sunun', 'coffee-shop' ), esc_html( get_bloginfo( 'name' ) ) ), array( 'b' => array() ) );
				?>
			</p>
			<div class="pill">
				<span><b data-count="5">5</b> <?php esc_html_e( 'Harman', 'coffee-shop' ); ?></span><i></i>
				<span><b data-count="48">48</b> <?php esc_html_e( 'saatte taze kargo', 'coffee-shop' ); ?></span><i></i>
				<span><b data-count="2">2</b> <?php esc_html_e( 'iş gününde dönüş', 'coffee-shop' ); ?></span>
			</div>
		</div>
		<div class="mb">
			<?php if ( $coffee_form ) : ?>
				<?php echo $coffee_form; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Contact Form 7 output. ?>
			<?php else : ?>
				<div class="wp-block-button is-style-brown" style="text-align:center"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/bayilik/' ) ); ?>"><?php esc_html_e( 'Başvuru sayfasına git', 'coffee-shop' ); ?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
