<?php 

function miroed_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'miroed-style', get_stylesheet_uri() );

	// Load JS
	wp_enqueue_script( 'miroed-js', get_template_directory_uri() . '/js/main.min.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'miroed_scripts' );

?>