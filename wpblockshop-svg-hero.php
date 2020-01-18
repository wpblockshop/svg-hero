<?php
/**
 * Plugin Name: wpBlockShop SVG Hero
 * Plugin URI: https://github.com/wpblockshop/svg-hero
 * Description: SVG customizations for wpBlockShop website
 * Version: 0.1.1
 * Author: wpBlockShop
 * Author URI: https://github.com/wpblockshop
 * Domain Path: /languages
 * Text Domain: wpblockshop-svg
 *
 * @author wpblockshop
 * @version 0.1.1
 * @package wpblockshop-svg
 */
// Exits if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
add_action( 'plugins_loaded', 'load_wpblockshop_style_init' );
add_action( 'plugins_loaded', 'wpblockshop_svg_load_textdomain' );
/**
 * load_wpblockshop_init
 *
 * Acticvate php files found in folders
 *
 * @return null
 */
function load_wpblockshop_svg_init() {
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
function wpblockshop_style_load_textdomain() {
	load_plugin_textdomain( 'wpblockshop-svg', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

/**
 * Enqueue scripts and styles
 */
function wpblockshop_svg_scripts() {

	wp_enqueue_style( '' );
	wp_enqueue_script( 'gasp' );

	wp_enqueue_style( 'wpblockshop-svg-style', get_stylesheet_uri() );
	wp_enqueue_script( 'wpblockshop-svg-hero', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'wpblockshop_svg_scripts' );


  < script src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.4/gsap.min.js' > </script>
  <script src="./script.js"></script>
  <script type="text/javascript">
