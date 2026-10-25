<?php
/**
 * Title: Latest posts
 * Slug: coffee-shop/latest-posts
 * Categories: coffee-shop, query
 * Description: Tan band with the three newest posts as photo cards.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem, 9vw, 7rem)","bottom":"clamp(4rem, 9vw, 7rem)"},"blockGap":"0"}},"backgroundColor":"tan","textColor":"white","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-white-color has-tan-background-color has-text-color has-background" style="padding-top:clamp(4rem, 9vw, 7rem);padding-bottom:clamp(4rem, 9vw, 7rem)">
<!-- wp:group {"className":"coffee-section-head","style":{"spacing":{"padding":{"bottom":"1.2rem"},"margin":{"bottom":"clamp(2rem, 4vw, 3rem)"}},"border":{"bottom":{"color":"#ffffff59","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group coffee-section-head" style="border-bottom-color:#ffffff59;border-bottom-width:1px;margin-bottom:clamp(2rem, 4vw, 3rem);padding-bottom:1.2rem">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Blog', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-brown","style":{"typography":{"fontSize":"0.95rem"}}} -->
<div class="wp-block-button has-custom-font-size is-style-brown" style="font-size:0.95rem"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Tüm Yazılar', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"className":"coffee-posts"} -->
<div class="wp-block-query coffee-posts">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"clamp(1rem, 2.5vw, 2rem)"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10"} /-->
<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"1.2rem"}}}} /-->
<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"1.45rem","lineHeight":"1.1"}}} /-->
<!-- wp:post-excerpt {"moreText":"Devamını oku →","excerptLength":16} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
