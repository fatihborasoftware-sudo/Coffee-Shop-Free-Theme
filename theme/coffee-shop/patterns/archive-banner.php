<?php
/**
 * Title: Archive banner
 * Slug: coffee-shop/archive-banner
 * Inserter: no
 *
 * @package coffee-shop
 */

echo coffee_shop_banner( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- escaped in the helper.
	'roasted-beans-macro.webp',
	__( 'Arşiv', 'coffee-shop' ),
	'<!-- wp:query-title {"type":"archive","showPrefix":false,"level":1,"textColor":"white"} /-->'
);
