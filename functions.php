<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  	wp_enqueue_style('katkraw', get_template_directory_uri() . '/css/katkraw.css', array(), '1.0.0', 'all');
	wp_enqueue_style('logo', get_template_directory_uri() . '/css/logo.css', array(), '1.0.0', 'all');
	wp_enqueue_style('navbar', get_template_directory_uri() . '/css/navbar.css', array(), '1.0.0', 'all');
	wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', array(), '1.0.0', 'all');
	wp_enqueue_style('news', get_template_directory_uri() . '/css/news.css', array(), '1.0.0', 'all');
	wp_enqueue_style('galleryWP', get_template_directory_uri() . '/css/galleryWP.css', array(), '1.0.0', 'all');
	wp_enqueue_style('prices', get_template_directory_uri() . '/css/prices.css', array(), '1.0.0', 'all');
	wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css', array(), '1.0.0', 'all');
	wp_enqueue_style('map', get_template_directory_uri() . '/css/map.css', array(), '1.0.0', 'all');
	wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
 
  wp_enqueue_script( 'sliderUpper', get_template_directory_uri() . '/js/sliderUpper.js', array (), 1.0, true);
  wp_enqueue_script( 'gallery', get_template_directory_uri() . '/js/gallery.js', array (), 1.0, true);
  wp_enqueue_script( 'linkAnim', get_template_directory_uri() . '/js/linkAnim.js', array (), 1.0, true);
  wp_enqueue_script( 'click', get_template_directory_uri() . '/js/click.js', array (), 1.0, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function awesome_theme_setup() {
	
	add_theme_support('menus');
	
	//register_nav_menu('primary', 'Primary Header Navigation');
	//register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'awesome_theme_setup');
