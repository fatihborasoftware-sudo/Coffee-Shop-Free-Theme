<?php
/**
 * Title: Scrolling words
 * Slug: coffee-shop/marquee
 * Categories: coffee-shop, text
 * Description: Big outlined words that scroll across the page. Separate the words with "•". Add the class "is-dark" for the navy version or "is-reverse" to scroll the other way.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","className":"coffee-marquee","style":{"spacing":{"padding":{"left":"0","right":"0"}}},"backgroundColor":"light","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull coffee-marquee has-light-background-color has-background" style="padding-right:0;padding-left:0">
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Taze kavrum • Tutkuyla demlenen • Midnight Bloom • Keyifle sunulan • Çekirdekten fincana', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
