<?php
/**
 * Plugin Name: wpBlockShop SVG Hero
 * Plugin URI: https://github.com/wpblockshop/svg-hero
 * Description: SVG customizations for wpBlockShop website
 * Version: 0.1.1
 * Author: wpBlockShop
 * Author URI: https://github.com/wpblockshop
 * Domain Path: /languages
 * Text Domain: wpblockshop-svg-hero
 *
 * @author wpblockshop
 * @version 0.1.1
 * @package wpblockshop_svg_hero
 */

// Exits if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


add_action( 'plugins_loaded', 'load_wpblockshop_svg_hero_init' );
add_action( 'plugins_loaded', 'wpblockshop_svg_hero_load_textdomain' );
/**
 * load_wpblockshop_init
 *
 * Acticvate php files found in folders
 *
 * @return null
 */
function load_wpblockshop_svg_hero_init() {
	if ( file_exists( __DIR__ . '/inc' ) && is_dir( __DIR__ . '/inc' ) ) {
		foreach ( glob( __DIR__ . '/inc/*.php' ) as $filename ) {
			require $filename;
		}
	}
}

/**
 * Setup WordPress localization support
 *
 * @since 0.1.1
 */
function wpblockshop_svg_hero_load_textdomain() {
	load_plugin_textdomain( 'wpblockshop-svg-hero', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
