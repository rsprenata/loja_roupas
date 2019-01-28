<?php 
/*This file is part of Construction City child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/


add_action( 'wp_enqueue_scripts', 'construction_city_theme_css',20);
function construction_city_theme_css() {
	wp_enqueue_style( 'construction-city-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'construction-city-style',get_stylesheet_directory_uri() . '/css/cz-child.css');
  
}

