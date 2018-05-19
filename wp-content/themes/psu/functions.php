<?php

function psu_scripts() {
	//$style_guide_uri = '/wp-content/themes/psu/library/';
	wp_enqueue_style( 'glyphish-font', get_template_directory_uri() . '/library/fonts/ss-glyphish-filled.css' );
	wp_enqueue_style( 'symbolicons-font', get_template_directory_uri() . '/library/fonts/ss-symbolicons-block.css' );
	wp_enqueue_style( 'social-font', get_template_directory_uri() . '/library/fonts/ss-social-regular.css' );
	wp_enqueue_style( 'psu-style', get_stylesheet_uri() );
	wp_enqueue_style( 'psu-style-bs', get_template_directory_uri() . '/library/css/bootstrap.css' );
	wp_enqueue_style( 'psu-style-main', get_template_directory_uri() . '/library/css/main.css' );
	wp_enqueue_script( 'psu-style-jquery', get_template_directory_uri() . '/library/js/jquery.js' );
	wp_enqueue_script( 'psu-style-bsjs', get_template_directory_uri() . '/library/js/bootstrap.js' );
	wp_enqueue_script( 'psu-style-js', get_template_directory_uri() . '/library/js/main.js' );
}

add_action( 'wp_enqueue_scripts', 'psu_scripts' );

?>