<?php 

function miroed_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'miroed-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'miroed_scripts' );

?>