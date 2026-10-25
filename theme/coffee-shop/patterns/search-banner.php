<?php
/**
 * Title: Search banner
 * Slug: coffee-shop/search-banner
 * Inserter: no
 *
 * @package coffee-shop
 */

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'roasted-beans-macro.webp',
	__( 'Arama', 'coffee-shop' ),
	'<!-- wp:query-title {"type":"search","level":1,"textColor":"white"} /-->'
	. '<!-- wp:search {"label":"Ara","showLabel":false,"buttonText":"Ara","className":"coffee-banner-search"} /-->'
);
