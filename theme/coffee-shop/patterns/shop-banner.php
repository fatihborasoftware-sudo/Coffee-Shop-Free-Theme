<?php
/**
 * Title: Shop banner
 * Slug: coffee-shop/shop-banner
 * Inserter: no
 *
 * @package coffee-shop
 */

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'coffee-bags-shelf.webp',
	__( 'Mağaza', 'coffee-shop' ),
	'<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"textColor":"white"} /-->'
	. '<!-- wp:term-description {"className":"coffee-lead"} /-->'
);
