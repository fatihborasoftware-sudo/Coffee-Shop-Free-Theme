<?php
/**
 * Coffee Shop theme functions.
 *
 * @package coffee-shop
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		add_editor_style( 'assets/css/theme.css' );
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		$theme = wp_get_theme();
		wp_enqueue_style( 'coffee-shop', get_theme_file_uri( 'assets/css/theme.css' ), array(), $theme->get( 'Version' ) );
	}
);

add_action(
	'init',
	function () {
		register_block_pattern_category( 'coffee-shop', array( 'label' => __( 'Coffee Shop', 'coffee-shop' ) ) );
		register_block_pattern_category( 'coffee-shop-pages', array( 'label' => __( 'Coffee Shop: full pages', 'coffee-shop' ) ) );

		register_block_style(
			'core/group',
			array(
				'name'  => 'card',
				'label' => __( 'Card', 'coffee-shop' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'placeholder-frame',
				'label' => __( 'Rounded frame', 'coffee-shop' ),
			)
		);
	}
);

/*
 * The header already places the account and cart icons. WooCommerce would
 * hook a second copy after the Navigation block, because the header part
 * only references a pattern, so take those out again.
 */
add_filter(
	'hooked_block_types',
	function ( $hooked_blocks, $position, $anchor_block ) {
		if ( 'core/navigation' === $anchor_block && 'after' === $position ) {
			$hooked_blocks = array_values( array_diff( $hooked_blocks, array( 'woocommerce/customer-account', 'woocommerce/mini-cart' ) ) );
		}
		return $hooked_blocks;
	},
	20,
	3
);
