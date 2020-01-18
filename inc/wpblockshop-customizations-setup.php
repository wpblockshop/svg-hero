<?php

add_action( 'wp_enqueue_scripts', 'enqueue_wpblockshop_svg-hero_style', 13 );
function enqueue_wpblockshop_svg - hero_style() {
	wp_register_style( 'wpblockshop-svg-hero-style', plugins_url( 'css/wpblockshop-svg-hero-style.css', __FILE__ ), [], time() );
	wp_enqueue_style( 'wpblockshop-svg-hero-style' );
}


add_action( 'admin_enqueue_scripts', 'enqueue_wpblockshop_editor_block_style' );
function enqueue_wpblockshop_editor_block_style() {
	wp_register_style( 'wpblockshop-blocks-editor', plugins_url( 'css/wpblockshop-blocks-editor.css', __FILE__ ), [], time() );
	wp_enqueue_style( 'wpblockshop-blocks-editor' );
}
