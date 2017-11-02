<?php 
function enqueue_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libs/slick/slick.css');
	wp_enqueue_style( 'fontsawesome', get_template_directory_uri() . '/libs/fontawesome/css/font-awesome.min.css');
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Forum');
	wp_enqueue_style( 'font-style');
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/css/main.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

function enqueue_scripts () {
	wp_enqueue_script('newscript', get_template_directory_uri() . '/js/script.js');
	}