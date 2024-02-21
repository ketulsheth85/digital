<?php
/**
 * Theme functions
 *
 * @package Kenta Digital Shop
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_DIGITAL_SHOP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_DIGITAL_SHOP_VERSION', '1.0.1' );
}

if ( ! defined( 'KENTA_DIGITAL_SHOP_PATH' ) ) {
	define( 'KENTA_DIGITAL_SHOP_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_DIGITAL_SHOP_URL' ) ) {
	define( 'KENTA_DIGITAL_SHOP_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'KENTA_DIGITAL_SHOP_ASSETS_URL' ) ) {
	define( 'KENTA_DIGITAL_SHOP_ASSETS_URL', KENTA_DIGITAL_SHOP_URL . 'assets/' );
}

// Helper functions
require_once KENTA_DIGITAL_SHOP_PATH . 'helpers.php';
// Customizer settings hook
require_once KENTA_DIGITAL_SHOP_PATH . 'customizer.php';

//
// One click demo import
//
if ( ! function_exists( 'kenta_digital_shop_demo_slug' ) ) {
	function kenta_digital_shop_demo_slug() {
		return 'kenta-digital-shop';
	}
}
add_filter( 'kenta_welcome_demo_slug', 'kenta_digital_shop_demo_slug' );

if ( ! function_exists( 'kenta_digital_shop_demo_name' ) ) {
	function kenta_digital_shop_demo_name() {
		return __( 'Kenta Digital Shop', 'kenta-digital-shop' );
	}
}
add_filter( 'kenta_welcome_demo_name', 'kenta_digital_shop_demo_name' );

if ( ! function_exists( 'kenta_digital_shop_demo_screenshot' ) ) {
	function kenta_digital_shop_demo_screenshot() {
		return KENTA_DIGITAL_SHOP_URL . 'screenshot.png';
	}
}
add_filter( 'kenta_welcome_demo_screenshot', 'kenta_digital_shop_demo_screenshot' );

//
// Dynamic css cache
//
if ( ! function_exists( 'kenta_digital_shop_cache_key' ) ) {
	function kenta_digital_shop_cache_key() {
		return 'kenta_digital_shop_dynamic_css';
	}
}
add_filter( 'kenta_filter_dynamic_css_cache_key', 'kenta_digital_shop_cache_key' );

if ( ! function_exists( 'kenta_digital_shop_cache_version' ) ) {
	function kenta_digital_shop_cache_version() {
		return KENTA_DIGITAL_SHOP_VERSION;
	}
}
add_filter( 'kenta_filter_cached_dynamic_css_version', 'kenta_digital_shop_cache_version' );
