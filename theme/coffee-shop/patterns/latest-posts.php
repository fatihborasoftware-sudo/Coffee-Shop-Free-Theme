<?php
/**
 * Title: Latest posts
 * Slug: coffee-shop/latest-posts
 * Categories: coffee-shop, query
 * Description: Three newest blog posts with a link to all posts.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"2.5rem"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"coffee-eyebrow","textColor":"caramel","fontSize":"small"} -->
<p class="coffee-eyebrow has-caramel-color has-text-color has-small-font-size"><?php esc_html_e( 'Blog', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Kahve rehberi', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Tüm yazılar', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
<div class="wp-block-query">
<!-- wp:post-template {"style":{"spacing":{"blockGap":"1.75rem"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/10","style":{"border":{"radius":"2px"}}} /-->
<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.8125rem","fontWeight":"500"}},"textColor":"caramel"} /-->
<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontSize":"1.375rem","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}}}} /-->
<!-- wp:post-excerpt {"moreText":"Devamını oku","excerptLength":18,"textColor":"muted"} /-->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->
