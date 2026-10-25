<?php
/**
 * Title: Page banner
 * Slug: coffee-shop/page-banner
 * Categories: coffee-shop, banner
 * Inserter: no
 * Description: Photo banner with the page title, used by the page template. Cart, checkout and account get their own photo; other pages use their featured image.
 *
 * @package coffee-shop
 */

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'coffee-bar.webp',
	__( 'Sayfa', 'coffee-shop' ),
	'<!-- wp:post-title {"level":1,"textColor":"white","style":{"typography":{"fontSize":"clamp(2.8rem, 7vw, 5rem)"}}} /-->',
	'coffee-page-banner'
);
