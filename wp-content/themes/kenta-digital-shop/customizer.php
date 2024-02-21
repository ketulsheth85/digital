<?php
/**
 * Theme Customizer
 *
 * @package Kenta Digital Shop
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Disable site wrap by default
add_filter( 'kenta_enable_site_wrap_default_value', 'kenta_digital_shop_return_no' );

//
// Transparent header
//
// Show blogs archive header by default
add_filter( 'kenta_disable_blogs_archive_header_default_value', 'kenta_digital_shop_return_no' );
// Enable transparent header by default
add_filter( 'kenta_enable_transparent_header_default_value', 'kenta_digital_shop_return_yes' );
// Enable transparent header in archive page
add_filter( 'kenta_disable_archive_transparent_header_default_value', 'kenta_digital_shop_return_no' );

//
//  Card style
//
if ( ! function_exists( 'kenta_digital_shop_card_preset' ) ) {
	function kenta_digital_shop_card_preset() {
		return 'solid-shadow';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_digital_shop_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_digital_shop_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_digital_shop_card_preset' );

//
// Default color preset
//

if ( ! function_exists( 'kenta_digital_shop_default_color_presets' ) ) {
	function kenta_digital_shop_default_color_presets() {
		return 'kenta-digital-shop';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_digital_shop_default_color_presets' );

if ( ! function_exists( 'kenta_digital_shop_color_presets' ) ) {
	function kenta_digital_shop_color_presets( $presets ) {
		$presets['kenta-digital-shop'] = array(
			'kenta-primary-color'  => '#115e59',
			'kenta-primary-active' => '#facc15',
			'kenta-accent-color'   => '#181f28',
			'kenta-accent-active'  => '#334155',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_digital_shop_color_presets' );

//
// Dark color preset
//
if ( ! function_exists( 'kenta_digital_shop_dark_base_color' ) ) {
	function kenta_digital_shop_dark_base_color() {
		return [
			'300'     => '#3f464f',
			'200'     => '#2a3037',
			'100'     => '#000000',
			'default' => '#161b21',
		];
	}
}
add_filter( 'kenta_dark_base_color_default_value', 'kenta_digital_shop_dark_base_color' );

if ( ! function_exists( 'kenta_digital_shop_dark_accent_color' ) ) {
	function kenta_digital_shop_dark_accent_color() {
		return [
			'default' => '#fefefe',
			'active'  => '#c2c3c8',
		];
	}
}
add_filter( 'kenta_dark_accent_color_default_value', 'kenta_digital_shop_dark_accent_color' );

//
// Global typography
//
if ( ! function_exists( 'kenta_digital_shop_global_typography' ) ) {
	function kenta_digital_shop_global_typography() {
		return [
			'family'     => 'fira-sans',
			'fontSize'   => [
				'desktop' => '18px',
				'tablet'  => '__INITIAL_VALUE__',
				'mobile'  => '__INITIAL_VALUE__'
			],
			'variant'    => '400',
			'lineHeight' => '1',
		];
	}
}
add_filter( 'kenta_site_global_typography_default_value', 'kenta_digital_shop_global_typography' );

//
// Preloader
//
if ( ! function_exists( 'kenta_digital_shop_preloader_preset' ) ) {
	function kenta_digital_shop_preloader_preset() {
		return 'preset-2';
	}
}
add_filter( 'kenta_preloader_preset_default_value', 'kenta_digital_shop_preloader_preset' );

if ( ! function_exists( 'kenta_digital_shop_preloader_colors' ) ) {
	function kenta_digital_shop_preloader_colors() {
		return [
			'background' => '#181f28',
			'accent'     => '#ffffff',
			'primary'    => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_preloader_colors_default_value', 'kenta_digital_shop_preloader_colors' );

//
// Form style
//
if ( ! function_exists( 'kenta_digital_shop_form_style' ) ) {
	function kenta_digital_shop_form_style() {
		return 'modern';
	}
}
add_filter( 'kenta_content_form_style_default_value', 'kenta_digital_shop_form_style' );

// theme switch element
if ( ! function_exists( 'kenta_digital_shop_theme_switch_icon' ) ) {
	function kenta_digital_shop_theme_switch_icon() {
		return [
			'value'   => 'fas fa-circle-half-stroke',
			'library' => 'fa-solid',
		];
	}
}
add_filter( 'kenta_header_el_theme_switch_light_icon_default_value', 'kenta_digital_shop_theme_switch_icon' );
add_filter( 'kenta_header_el_theme_switch_dark_icon_default_value', 'kenta_digital_shop_theme_switch_icon' );

// search element
if ( ! function_exists( 'kenta_digital_shop_search_icon' ) ) {
	function kenta_digital_shop_search_icon() {
		return [
			'value'   => 'fas fa-q',
			'library' => 'fa-solid'
		];
	}
}
add_filter( 'kenta_header_el_search_icon_button_icon_default_value', 'kenta_digital_shop_search_icon' );

//
// Sticky header
//
add_filter( 'kenta_sticky_header_default_value', 'kenta_digital_shop_return_yes' );

if ( ! function_exists( 'kenta_digital_shop_sticky_header_border_bottom' ) ) {
	function kenta_digital_shop_sticky_header_border_bottom() {
		return [
			'style' => 'solid',
			'width' => 3,
			'color' => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_sticky_header_border_bottom_default_value', 'kenta_digital_shop_sticky_header_border_bottom' );

//
// Article header style
//
if ( ! function_exists( 'kenta_digital_shop_article_featured_image_position' ) ) {
	/**
	 * Change default article featured image position design
	 *
	 * @return string
	 */
	function kenta_digital_shop_article_featured_image_position() {
		return 'behind';
	}
}
add_filter( 'kenta_post_featured_image_position_default_value', 'kenta_digital_shop_article_featured_image_position' );
add_filter( 'kenta_page_featured_image_position_default_value', 'kenta_digital_shop_article_featured_image_position' );

if ( ! function_exists( 'kenta_digital_shop_featured_image_background_overlay' ) ) {
	/**
	 * Change default hero background for single posts and pages
	 *
	 * @return array
	 */
	function kenta_digital_shop_featured_image_background_overlay() {
		return array(
			'type'  => 'color',
			'color' => 'var(--kenta-primary-color)'
		);
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_default_value', 'kenta_digital_shop_featured_image_background_overlay' );
add_filter( 'kenta_page_featured_image_background_overlay_default_value', 'kenta_digital_shop_featured_image_background_overlay' );

if ( ! function_exists( 'kenta_digital_shop_featured_image_fallback' ) ) {
	function kenta_digital_shop_featured_image_fallback() {
		return array(
			'url' => KENTA_DIGITAL_SHOP_ASSETS_URL . 'images/abstract-background.jpg',
			'x'   => 0.5,
			'y'   => 0.5,
		);
	}
}
add_filter( 'kenta_post_featured_image_fallback_default_value', 'kenta_digital_shop_featured_image_fallback' );
add_filter( 'kenta_page_featured_image_fallback_default_value', 'kenta_digital_shop_featured_image_fallback' );
// Disable fallback image in archive
add_filter( 'kenta_entry_thumbnail_use_fallback_default_value', 'kenta_digital_shop_return_no' );

if ( ! function_exists( 'kenta_digital_shop_featured_image_elements_override' ) ) {
	function kenta_digital_shop_featured_image_elements_override() {
		return array(
			'override' => '#fff'
		);
	}
}
add_filter( 'kenta_post_featured_image_elements_override_default_value', 'kenta_digital_shop_featured_image_elements_override' );
add_filter( 'kenta_page_featured_image_elements_override_default_value', 'kenta_digital_shop_featured_image_elements_override' );

if ( ! function_exists( 'kenta_digital_shop_featured_image_overlay_opacity' ) ) {
	function kenta_digital_shop_featured_image_overlay_opacity() {
		return 0.9;
	}
}
add_filter( 'kenta_post_featured_image_background_overlay_opacity_default_value', 'kenta_digital_shop_featured_image_overlay_opacity' );
add_filter( 'kenta_page_featured_image_background_overlay_opacity_default_value', 'kenta_digital_shop_featured_image_overlay_opacity' );

//
// Archive header style
//

if ( ! function_exists( 'kenta_digital_shop_default_archive_header_padding' ) ) {
	/**
	 * Change default padding for archive header
	 *
	 * @return array
	 */
	function kenta_digital_shop_default_archive_header_padding() {
		return array(
			'top'    => '148px',
			'bottom' => '68px',
			'left'   => '24px',
			'right'  => '24px',
			'linked' => false
		);
	}
}
add_filter( 'kenta_archive_header_padding_default_value', 'kenta_digital_shop_default_archive_header_padding' );

if ( ! function_exists( 'kenta_digital_shop_archive_title_typography' ) ) {
	function kenta_digital_shop_archive_title_typography() {
		return array(
			'family'        => 'inherit',
			'fontSize'      => [ 'desktop' => '3rem', 'tablet' => '2rem', 'mobile' => '1.875em' ],
			'variant'       => '700',
			'lineHeight'    => '1.5',
			'textTransform' => 'capitalize',
		);
	}
}
add_filter( 'kenta_archive_title_typography_default_value', 'kenta_digital_shop_archive_title_typography' );

if ( ! function_exists( 'kenta_digital_shop_archive_title_color' ) ) {
	function kenta_digital_shop_archive_title_color() {
		return array(
			'initial' => '#fff'
		);
	}
}
add_filter( 'kenta_archive_title_color_default_value', 'kenta_digital_shop_archive_title_color' );

if ( ! function_exists( 'kenta_digital_shop_archive_description_color' ) ) {
	function kenta_digital_shop_archive_description_color() {
		return array(
			'initial' => 'rgba(255,255,255,0.75)',
		);
	}
}
add_filter( 'kenta_archive_description_color_default_value', 'kenta_digital_shop_archive_description_color' );

// Enable archive header overlay
add_filter( 'kenta_archive_header_has_overlay_default_value', 'kenta_digital_shop_return_yes' );

if ( ! function_exists( 'kenta_digital_shop_archive_header_overlay_opacity' ) ) {
	function kenta_digital_shop_archive_header_overlay_opacity() {
		return 0.9;
	}
}
add_filter( 'kenta_archive_header_overlay_opacity_default_value', 'kenta_digital_shop_archive_header_overlay_opacity' );

if ( ! function_exists( 'kenta_digital_shop_archive_header_overlay' ) ) {
	function kenta_digital_shop_archive_header_overlay() {
		return [
			'type'  => 'color',
			'color' => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_archive_header_overlay_default_value', 'kenta_digital_shop_archive_header_overlay' );

if ( ! function_exists( 'kenta_digital_shop_hero_background' ) ) {
	/**
	 * Change default hero background for archive
	 *
	 * @return array
	 */
	function kenta_digital_shop_hero_background() {
		return array(
			'type'  => 'image',
			'image' => array(
				'color'  => 'var(--kenta-accent-color)',
				'size'   => 'cover',
				'repeat' => 'no-repeat',
				'source' => array(
					'url' => KENTA_DIGITAL_SHOP_ASSETS_URL . 'images/abstract-background.jpg',
					'x'   => 0.5,
					'y'   => 0.5,
				)
			),
		);
	}
}
add_filter( 'kenta_archive_header_background_default_value', 'kenta_digital_shop_hero_background' );

//
// Transparent Header settings
//

if ( ! function_exists( 'kenta_digital_shop_transparent_header_device' ) ) {
	function kenta_digital_shop_transparent_header_device() {
		return 'all';
	}
}
add_filter( 'kenta_enable_transparent_header_device_default_value', 'kenta_digital_shop_transparent_header_device' );

if ( ! function_exists( 'kenta_digital_shop_trans_header_site_title_color' ) ) {
	function kenta_digital_shop_trans_header_site_title_color() {
		return array(
			'initial' => '#fff',
			'hover'   => 'var(--kenta-primary-active)',
		);
	}
}
add_filter( 'kenta_trans_header_site_title_color_default_value', 'kenta_digital_shop_trans_header_site_title_color' );

if ( ! function_exists( 'kenta_digital_shop_trans_header_menu_color' ) ) {
	function kenta_digital_shop_trans_header_menu_color() {
		return array(
			'initial' => '#fff',
			'hover'   => 'var(--kenta-primary-active)',
			'active'  => 'var(--kenta-primary-active)',
		);
	}
}
add_filter( 'kenta_trans_header_menu_color_default_value', 'kenta_digital_shop_trans_header_menu_color' );

if ( ! function_exists( 'kenta_digital_shop_trans_header_button_color' ) ) {
	function kenta_digital_shop_trans_header_button_color() {
		return array(
			'initial' => '#fff',
			'hover'   => 'var(--kenta-primary-active)',
		);
	}
}
add_filter( 'kenta_trans_header_button_color_default_value', 'kenta_digital_shop_trans_header_button_color' );

//
// Archive elements
//
if ( ! function_exists( 'kenta_digital_shop_read_more_preset' ) ) {
	function kenta_digital_shop_read_more_preset() {
		return 'outline';
	}
}
add_filter( 'kenta_entry_read_more_preset_default_value', 'kenta_digital_shop_read_more_preset' );

//
// Footer bottom row
//
if ( ! function_exists( 'kenta_digital_shop_footer_bottom_row_border_top' ) ) {
	function kenta_digital_shop_footer_bottom_row_border_top() {
		return [
			'width' => 3,
			'style' => 'solid',
			'color' => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_footer_bottom_row_border_top_default_value', 'kenta_digital_shop_footer_bottom_row_border_top' );
