<?php
/**
 * Coffee Shop theme functions.
 *
 * @package coffee-shop
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require get_theme_file_path( 'inc/turkish-woo.php' );

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
		wp_enqueue_script( 'coffee-shop', get_theme_file_uri( 'assets/js/theme.js' ), array(), $theme->get( 'Version' ), array( 'strategy' => 'defer', 'in_footer' => true ) );

		$slides = array();
		if ( is_front_page() ) {
			$slides = array(
				array(
					'src'    => get_theme_file_uri( 'assets/video/latte-art-pour.mp4' ),
					'poster' => get_theme_file_uri( 'assets/images/latte-art-pour-poster.webp' ),
				),
				array(
					'src'    => get_theme_file_uri( 'assets/video/espresso-drip.mp4' ),
					'poster' => get_theme_file_uri( 'assets/images/espresso-drip-poster.webp' ),
				),
			);
		}
		wp_localize_script(
			'coffee-shop',
			'coffeeShop',
			array(
				/** Filter the extra hero video slides on the front page. */
				'slides' => apply_filters( 'coffee_shop_hero_slides', $slides ),
				'i18n'   => array( 'scroll' => __( 'Kaydır', 'coffee-shop' ) ),
			)
		);
	}
);

/**
 * Loader, cookie card, "Bayimiz ol" badge and the dealer popup.
 * Each one can be turned off with its filter, for example:
 * add_filter( 'coffee_shop_cookie_notice', '__return_false' );
 */
add_action(
	'wp_footer',
	function () {
		if ( is_front_page() && apply_filters( 'coffee_shop_loader', true ) ) {
			get_template_part( 'inc/loader' );
		}
		if ( apply_filters( 'coffee_shop_cookie_notice', true ) ) {
			get_template_part( 'inc/cookie' );
		}
		if ( apply_filters( 'coffee_shop_dealer_popup', true ) ) {
			get_template_part( 'inc/dealer-popup' );
		}
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

/**
 * Markup for a full-width photo banner with a small breadcrumb and a headline.
 * Used by the page patterns and templates.
 *
 * @param string $image    File name in assets/images.
 * @param string $crumb    Breadcrumb label after "Anasayfa".
 * @param string $heading  Heading block markup (a core/heading or core/post-title block).
 * @param string $class    Extra class.
 * @return string Block markup.
 */
function coffee_shop_banner( $image, $crumb, $heading, $class = '' ) {
	$url   = esc_url( get_theme_file_uri( 'assets/images/' . $image ) );
	$class = trim( 'coffee-banner ' . $class );
	$home  = esc_url( home_url( '/' ) );
	$crumb = esc_html( $crumb );
	$label = esc_html__( 'Anasayfa', 'coffee-shop' );
	return <<<HTML
<!-- wp:cover {"url":"{$url}","dimRatio":80,"customOverlayColor":"#0a0806","isUserOverlayColor":true,"minHeight":340,"contentPosition":"center left","isDark":true,"align":"full","className":"{$class}","style":{"spacing":{"padding":{"top":"clamp(3.5rem, 8vw, 6rem)","bottom":"clamp(3.5rem, 8vw, 6rem)"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-left {$class}" style="padding-top:clamp(3.5rem, 8vw, 6rem);padding-bottom:clamp(3.5rem, 8vw, 6rem);min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#0a0806"></span><img class="wp-block-cover__image-background" alt="" src="{$url}" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"className":"coffee-crumbs"} -->
<p class="coffee-crumbs"><a href="{$home}">{$label}</a> / {$crumb}</p>
<!-- /wp:paragraph -->
{$heading}
</div></div>
<!-- /wp:cover -->
HTML;
}

/*
 * The shared page banner (cart, checkout, account and plain pages) picks a
 * photo that fits the page.
 */
add_filter(
	'render_block_core/cover',
	function ( $html, $block ) {
		if ( false === strpos( $block['attrs']['className'] ?? '', 'coffee-page-banner' ) ) {
			return $html;
		}
		$map  = array(
			'sepet'   => 'flatlay-cup-beans.webp',
			'odeme'   => 'coffee-bar.webp',
			'hesabim' => 'cafe-interior.webp',
		);
		$slug = is_page() ? get_post_field( 'post_name', get_queried_object_id() ) : '';
		$file = $map[ $slug ] ?? 'roasted-beans-macro.webp';
		if ( has_post_thumbnail() && ! isset( $map[ $slug ] ) && is_page() ) {
			$photo = get_the_post_thumbnail_url( get_queried_object_id(), 'full' );
		} else {
			$photo = get_theme_file_uri( 'assets/images/' . $file );
		}
		$html = str_replace( get_theme_file_uri( 'assets/images/coffee-bar.webp' ), esc_url( $photo ), $html );
		if ( is_singular() ) {
			$html = str_replace( '</a> / ' . esc_html__( 'Sayfa', 'coffee-shop' ), '</a> / ' . esc_html( get_the_title( get_queried_object_id() ) ), $html );
		}
		return $html;
	},
	10,
	2
);
