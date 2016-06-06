<?php 

function miroed_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'miroed-style', get_stylesheet_uri() );

	wp_enqueue_script( 'miroed-js', get_template_directory_uri() . '/dist/js/e1febfd881b3affb8894.js' );
}
add_action( 'wp_enqueue_scripts', 'miroed_scripts' );

?>