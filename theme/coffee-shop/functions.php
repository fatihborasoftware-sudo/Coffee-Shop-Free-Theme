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
