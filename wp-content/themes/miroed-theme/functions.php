<?php 

	function miroed_scripts() {

		// Load our main stylesheet.
		wp_enqueue_style( 'miroed-style', get_stylesheet_uri() );

		wp_enqueue_script( 'js_color', get_template_directory_uri() . '/js/vendor/jquery.color-2.1.0.js', array('jquery') );
		wp_enqueue_script( 'color', get_template_directory_uri() . '/js/native/color.js', array('jquery', 'js_color') );
	}
	add_action( 'wp_enqueue_scripts', 'miroed_scripts' );

?>