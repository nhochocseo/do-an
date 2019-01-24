<?php
/*This file is part of woodest-child, woodest child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function woodest_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	wp_enqueue_style( 
		'app-style',
		get_stylesheet_directory_uri() . '/assets/css/app.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
 if ( is_page_template( 'templates/daikin-va-nhu-cau-cua-ban.php' ) || is_page_template( 'templates/daikin-thuong-hieu-nhat-ban.php' ) ) {

	wp_enqueue_style( 
		'slick-style',
		get_stylesheet_directory_uri() . '/assets/css/slick.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );

	wp_enqueue_style( 
		'animate.min-style',
		get_stylesheet_directory_uri() . '/assets/css/animate.min.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );

	wp_enqueue_style( 
		'discover-style',
		get_stylesheet_directory_uri() . '/assets/css/discover.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );

	wp_enqueue_style( 
		'discover-all-you-need-style',
		get_stylesheet_directory_uri() . '/assets/css/discover-all-you-need.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );

	wp_enqueue_style( 
		'discover-japanbrand-style',
		get_stylesheet_directory_uri() . '/assets/css/discover-japanbrand.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
}
	}
add_action( 'wp_enqueue_scripts', 'woodest_child_enqueue_child_styles' );

/*Write here your own functions */
