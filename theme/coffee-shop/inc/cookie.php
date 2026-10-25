<?php
/**
 * Cookie card. The choice is kept in localStorage and a first-party cookie
 * (coffee_cookie_consent) so plugins can read it.
 *
 * @package coffee-shop
 */

$coffee_privacy = get_privacy_policy_url();
?>
<div class="coffee-cookie" hidden role="dialog" aria-labelledby="coffee-cookie-title">
	<div class="ch"><span class="ci" aria-hidden="true">🍪</span><h2 id="coffee-cookie-title"><?php esc_html_e( 'Kahve deneyimini özelleştir', 'coffee-shop' ); ?></h2></div>
	<p>
		<?php
		/* translators: %s: site name */
		echo esc_html( sprintf( __( '%s olarak sitemizde sana en iyi ve kesintisiz deneyimi sunabilmek için çerezler kullanıyoruz.', 'coffee-shop' ), get_bloginfo( 'name' ) ) );
		?>
		<?php if ( $coffee_privacy ) : ?>
			<a href="<?php echo esc_url( $coffee_privacy ); ?>"><?php esc_html_e( 'Gizlilik Politikası', 'coffee-shop' ); ?></a>
		<?php endif; ?>
	</p>
	<div class="prefs" hidden>
		<label><span><?php esc_html_e( 'Gerekli çerezler', 'coffee-shop' ); ?><small><?php esc_html_e( 'Sepet ve oturum için her zaman açık', 'coffee-shop' ); ?></small></span><input class="coffee-sw" type="checkbox" checked disabled></label>
		<label><span><?php esc_html_e( 'Analitik', 'coffee-shop' ); ?><small><?php esc_html_e( 'Siteyi nasıl kullandığını anlamamıza yardım eder', 'coffee-shop' ); ?></small></span><input class="coffee-sw" type="checkbox" name="analytics" checked></label>
		<label><span><?php esc_html_e( 'Pazarlama', 'coffee-shop' ); ?><small><?php esc_html_e( 'Sana özel kampanyalar gösterir', 'coffee-shop' ); ?></small></span><input class="coffee-sw" type="checkbox" name="marketing"></label>
	</div>
	<div class="cb">
		<button type="button" data-consent="all"><?php esc_html_e( 'Tümünü Kabul Et', 'coffee-shop' ); ?></button>
		<button type="button" class="out" data-consent="necessary"><?php esc_html_e( 'Sadece Gerekli', 'coffee-shop' ); ?></button>
		<button type="button" class="lnk" data-save="<?php esc_attr_e( 'Seçimi kaydet', 'coffee-shop' ); ?>"><?php esc_html_e( 'Ayarlar', 'coffee-shop' ); ?></button>
	</div>
</div>
