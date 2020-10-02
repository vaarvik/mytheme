<?php
/**
 * Register and Enqueue Styles.
 */
function mytheme_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'mytheme-info', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'mytheme-style', get_stylesheet_directory_uri() . "/assets/styles/style.css", array(), $theme_version );

}

add_action( 'wp_enqueue_scripts', 'mytheme_register_styles' );
