<?php
/**
 * Theme Helpers
 *
 * @package Kenta Digital Shop
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'kenta_digital_shop_return_yes' ) ) {
	function kenta_digital_shop_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_digital_shop_return_no' ) ) {
	function kenta_digital_shop_return_no() {
		return 'no';
	}
}

if ( ! function_exists( 'kenta_digital_shop_asset_url' ) ) {
	/**
	 * Get template assets file url
	 *
	 * @param $asset
	 *
	 * @return string
	 */
	function kenta_digital_shop_asset_url( $asset ) {
		return KENTA_DIGITAL_SHOP_ASSETS_URL . $asset;
	}
}
