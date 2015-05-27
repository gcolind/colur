<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Register and enqueue styles
function storefrontchild_load_style() {
	if ( !is_admin() ) {
	    wp_enqueue_style( 'storefront_damion', 'http://fonts.googleapis.com/css?family=Damion');
	    wp_enqueue_style( 'storefront_style', get_stylesheet_uri() );
	}
}
add_action('wp_enqueue_scripts', 'storefrontchild_load_style');

?>
