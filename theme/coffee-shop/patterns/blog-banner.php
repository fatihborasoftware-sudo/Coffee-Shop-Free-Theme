<?php
/**
 * Title: Blog banner
 * Slug: coffee-shop/blog-banner
 * Inserter: no
 *
 * @package coffee-shop
 */

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'espresso-pour.webp',
	__( 'Blog', 'coffee-shop' ),
	'<!-- wp:heading {"level":1,"textColor":"white"} --><h1 class="wp-block-heading has-white-color has-text-color">' . wp_kses( __( 'Kahve <span class="rose">Rehberi</span>', 'coffee-shop' ), array( 'span' => array( 'class' => array() ) ) ) . '</h1><!-- /wp:heading -->'
	. '<!-- wp:paragraph {"className":"coffee-lead"} --><p class="coffee-lead">' . esc_html__( 'Demleme ipuçları, çekirdek rehberleri ve kahve kültürü üzerine yazılar.', 'coffee-shop' ) . '</p><!-- /wp:paragraph -->'
);
