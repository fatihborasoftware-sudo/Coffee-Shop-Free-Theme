<?php
/**
 * Title: Dealer banner
 * Slug: coffee-shop/dealer-banner
 * Categories: coffee-shop, call-to-action
 * Description: Caramel banner inviting cafes to become dealers.
 *
 * @package coffee-shop
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull">
<!-- wp:group {"style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"3.5rem","bottom":"3.5rem","left":"clamp(1.5rem, 4vw, 3.5rem)","right":"clamp(1.5rem, 4vw, 3.5rem)"}}},"backgroundColor":"caramel","textColor":"ink","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-ink-color has-caramel-background-color has-text-color has-background" style="border-radius:24px;padding-top:3.5rem;padding-right:clamp(1.5rem, 4vw, 3.5rem);padding-bottom:3.5rem;padding-left:clamp(1.5rem, 4vw, 3.5rem)">
<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"620px","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(1.75rem, 3vw, 2.25rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(1.75rem, 3vw, 2.25rem)"><?php esc_html_e( 'Kafeniz için Midnight Bloom', 'coffee-shop' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'Bayimiz olun, harmanlarımızı kendi menünüzde sunun.', 'coffee-shop' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"ink","textColor":"light"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-light-color has-ink-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( home_url( '/bayilik/' ) ); ?>"><?php esc_html_e( 'Bayilik başvurusu', 'coffee-shop' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
