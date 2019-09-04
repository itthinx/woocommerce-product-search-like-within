<?php
/**
* Plugin Name: WooCommerce Product Search Like Within
* Plugin URI:
* Description: Enables search within terms for <a href=" https://www.itthinx.com/shop/woocommerce-product-search/">WooCommerce Product Search</a>.
* Version: 1.0.0
* Author: itthinx
* Author URI: http://www.itthinx.com
* Donate-Link: http://www.itthinx.com
* License: GPLv3
*/

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Implements the woocommerce_product_search_like_within filter to enable search within.
 */
class WooCommerce_Product_Search_Like_Within {

	/**
	 * Adds the woocommerce_product_search_like_within filter.
	 */
	public static function boot() {
		add_filter( 'woocommerce_product_search_like_within', array( __CLASS__, 'enable_wps_search_like_within' ), 10, 3 );
	}

	/**
	 * Enable search within.
	 *
	 * @param boolean $enable
	 * @param array $object_type_ids
	 * @param array $search_terms
	 *
	 * @return boolean
	 */
	public static function enable_wps_search_like_within( $enable, $object_type_ids, $search_terms ) {
		return true;
	}
}
WooCommerce_Product_Search_Like_Within::boot();
