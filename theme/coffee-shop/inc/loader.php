<?php
/**
 * Front page loader: a cup fills with coffee, then fades out.
 *
 * @package coffee-shop
 */

$coffee_logo = get_theme_mod( 'custom_logo' ) ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'medium' ) : '';
?>
<div class="coffee-loader" aria-hidden="true">
	<div class="lw">
		<svg viewBox="0 0 64 64">
			<path class="st" d="M24 14c-3-4 3-6 0-10"/><path class="st b" d="M34 14c-3-4 3-6 0-10"/>
			<defs><clipPath id="coffee-cupclip"><path d="M12 22h36v18a14 14 0 0 1-14 14h-8a14 14 0 0 1-14-14z"/></clipPath></defs>
			<g clip-path="url(#coffee-cupclip)"><rect class="fill" x="10" y="22" width="40" height="34" fill="#966041"/></g>
			<path d="M12 22h36v18a14 14 0 0 1-14 14h-8a14 14 0 0 1-14-14z" fill="none" stroke="#fff" stroke-width="2.5"/>
			<path d="M48 27h3a6 6 0 0 1 0 12h-3" fill="none" stroke="#fff" stroke-width="2.5"/>
		</svg>
		<?php if ( $coffee_logo ) : ?>
			<img src="<?php echo esc_url( $coffee_logo ); ?>" alt="" width="130" style="animation:coffee-fadeup .6s ease .35s both">
		<?php endif; ?>
		<div class="bar"></div>
	</div>
</div>
