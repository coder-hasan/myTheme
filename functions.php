<?php

function myTheme_file(){
wp_enqueue_style( 'google-fonts','https://fonts.googleapis.com/css?family=Croissant+One', array(), '1.0', 'all' );
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900', array(), '1.0', 'all' );
wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css', array(), '1.0', 'all' );
wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/font-awesome.min.css', array(), '1.0', 'all' );
wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/css/owl.carousel.min.css', array(), '1.0', 'all' );
wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri().'/css/owl.theme.default.min.css', array(), '1.0', 'all' );
wp_enqueue_style( 'myTheme-style', get_stylesheet_uri());
wp_enqueue_style( 'myTheme-responsive-style', get_template_directory_uri().'/responsive.css', array(), '1.0', 'all' );

wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0', true);
wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'), '1.0', true);
wp_enqueue_script( 'active-js', get_template_directory_uri().'/js/active.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','myTheme_file');

function myTheme_supports(){
	load_theme_textdomain( 'myTheme', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'myTheme' ),
		) );
add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
}
add_action('after_setup_theme','myTheme_supports');

function myTheme_cpt_one(){

	}
add_action('init','myTheme_cpt_one');