<?php
/**
 * Turkish fallback for the WooCommerce strings the theme shows, used when the
 * site language is Turkish but WooCommerce's language pack isn't installed yet
 * (Dashboard → Updates → Update Translations installs the full pack).
 *
 * @package coffee-shop
 */

if ( 0 !== strpos( determine_locale(), 'tr' ) ) {
	return;
}

/**
 * Turkish text for WooCommerce strings, keyed by the English original.
 *
 * @return array
 */
function coffee_shop_tr_strings() {
	return array(
		'Add to cart'                          => 'Sepete ekle',
		'Add to cart: &ldquo;%s&rdquo;'        => '&ldquo;%s&rdquo; sepete ekle',
		'Read more'                            => 'Devamını oku',
		'Read more about &ldquo;%s&rdquo;'     => '&ldquo;%s&rdquo; hakkında',
		'Select options for &ldquo;%s&rdquo;'  => '&ldquo;%s&rdquo; seçenekleri',
		'Select options'                       => 'Seçenekleri gör',
		'View cart'                            => 'Sepeti gör',
		'Sale'                                 => 'İndirim',
		'Sale!'                                => 'İndirim!',
		'Description'                          => 'Açıklama',
		'Additional information'               => 'Ek bilgi',
		'Reviews (%d)'                         => 'Değerlendirmeler (%d)',
		'Reviews'                              => 'Değerlendirmeler',
		'Related products'                     => 'Benzer ürünler',
		'You may also like&hellip;'            => 'Bunları da beğenebilirsin&hellip;',
		'Home'                                 => 'Anasayfa',
		'Shop'                                 => 'Mağaza',
		'Quantity'                             => 'Adet',
		'Product quantity'                     => 'Ürün adedi',
		'In stock'                             => 'Stokta',
		'Out of stock'                         => 'Stokta yok',
		'Default sorting'                      => 'Varsayılan sıralama',
		'Sort by popularity'                   => 'En çok satanlar',
		'Sort by average rating'               => 'En yüksek puan',
		'Sort by latest'                       => 'En yeniler',
		'Sort by most recent'                  => 'En yeniler',
		'Sort by price: low to high'           => 'Fiyat: düşükten yükseğe',
		'Sort by price: high to low'           => 'Fiyat: yüksekten düşüğe',
		'Sort by price (asc)'                  => 'Fiyat: düşükten yükseğe',
		'Sort by price (desc)'                 => 'Fiyat: yüksekten düşüğe',
		'Showing the single result'            => 'Tek sonuç gösteriliyor',
		'Showing all %d results'               => 'Tüm %d sonuç gösteriliyor',
		'Search products&hellip;'              => 'Ürün ara&hellip;',
		'There are no reviews yet.'            => 'Henüz değerlendirme yok.',
		'Be the first to review &ldquo;%s&rdquo;' => '&ldquo;%s&rdquo; için ilk değerlendirmeyi sen yaz',
		'Your rating'                          => 'Puanın',
		'Your review'                          => 'Değerlendirmen',
		'Submit'                               => 'Gönder',
		'Category:'                            => 'Kategori:',
		'Categories:'                          => 'Kategoriler:',
	);
}

/**
 * Swaps in the Turkish text only while WooCommerce still returns English.
 *
 * @param string $translation Translated text.
 * @param string $text        Original text.
 * @return string
 */
function coffee_shop_tr_fallback( $translation, $text ) {
	if ( $translation !== $text ) {
		return $translation;
	}
	$strings = coffee_shop_tr_strings();
	return $strings[ $text ] ?? $translation;
}

add_filter(
	'gettext_woocommerce',
	function ( $translation, $text ) {
		return coffee_shop_tr_fallback( $translation, $text );
	},
	10,
	2
);

add_filter(
	'gettext_with_context_woocommerce',
	function ( $translation, $text ) {
		return coffee_shop_tr_fallback( $translation, $text );
	},
	10,
	2
);

add_filter(
	'ngettext_woocommerce',
	function ( $translation, $single, $plural, $number ) {
		return coffee_shop_tr_fallback( $translation, 1 === (int) $number ? $single : $plural );
	},
	10,
	4
);
