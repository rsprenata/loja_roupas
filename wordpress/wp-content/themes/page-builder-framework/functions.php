<?php
/**
 * Theme Functions
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Constants
define( 'WPBF_THEME_DIR', get_template_directory() );
define( 'WPBF_THEME_URI', get_template_directory_uri() );
define( 'WPBF_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'WPBF_CHILD_THEME_URI', get_stylesheet_directory_uri() );
define( 'WPBF_VERSION', wp_get_theme( 'page-builder-framework' )->get('Version') );
define( 'WPBF_CHILD_VERSION', wp_get_theme( 'wpbf-child' )->get('Version') );

// Theme Setup
add_action('after_setup_theme', 'wpbf_theme_setup');

function wpbf_theme_setup() {

	// Textdomain
	load_theme_textdomain( 'page-builder-framework', get_template_directory() . '/languages' );

	// Custom Logo
	add_theme_support( 'custom-logo',
		array(
			'width'       => 180,
			'height'      => 48,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Custom Background
	add_theme_support( 'custom-background',
		array(
			'default-color'          => 'ffffff',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'left',
			'default-position-y'     => 'top',
			'default-size'           => 'auto',
			'default-attachment'     => 'scroll',
		)
	);

	// Title Tag
	add_theme_support( 'title-tag' );

	// Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// HTML5 Support
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );

	// Selective Refresh for Widgets
	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menus( array(

		'main_menu' => __( 'Main Menu', 'page-builder-framework' ),
		'mobile_menu' => __( 'Mobile Menu', 'page-builder-framework' ),
		'pre_header_menu' => __( 'Pre Header Left', 'page-builder-framework' ),
		'pre_header_menu_right' => __( 'Pre Header Right', 'page-builder-framework' ),
		'footer_menu' => __( 'Footer Left', 'page-builder-framework' ),
		'footer_menu_right' => __( 'Footer Right', 'page-builder-framework' )

	) );

	// Gutenberg Wide Aligned Elements
	add_theme_support( 'align-wide' );

	// Gutenberg Default Font Sizes
	add_theme_support( 'editor-font-sizes', array(

		array(
			'name' => __( 'tiny', 'page-builder-framework' ),
			'shortName' => __( 'XS', 'page-builder-framework' ),
			'size' => 12,
			'slug' => 'tiny'
		),

		array(
			'name' => __( 'small', 'page-builder-framework' ),
			'shortName' => __( 'S', 'page-builder-framework' ),
			'size' => 14,
			'slug' => 'small'
		),

		array(
			'name' => __( 'regular', 'page-builder-framework' ),
			'shortName' => __( 'M', 'page-builder-framework' ),
			'size' => 16,
			'slug' => 'regular'
		),

		array(
			'name' => __( 'large', 'page-builder-framework' ),
			'shortName' => __( 'L', 'page-builder-framework' ),
			'size' => 20,
			'slug' => 'large'
		),

		array(
			'name' => __( 'larger', 'page-builder-framework' ),
			'shortName' => __( 'XL', 'page-builder-framework' ),
			'size' => 32,
			'slug' => 'larger'
		),

		array(
			'name' => __( 'extra', 'page-builder-framework' ),
			'shortName' => __( 'XXL', 'page-builder-framework' ),
			'size' => 44,
			'slug' => 'extra'
		)

	) );

}

// Content Width
if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

// Sidebar
add_action( 'widgets_init', 'wpbf_sidebars' );
function wpbf_sidebars() {

	register_sidebar( array(
		'name'			=> __( 'Sidebar', 'page-builder-framework' ),
		'id'			=> 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="wpbf-widgettitle">',
		'after_title'   => '</h4>'
	) );

}

// Styles & Scripts
add_action( 'wp_enqueue_scripts', 'wpbf_scripts', 10 );

function wpbf_scripts() {

	// site.js
	wp_enqueue_script( 'wpbf-site', get_template_directory_uri() . '/js/min/site-min.js', array( 'jquery' ), WPBF_VERSION, true );

	if( ! get_theme_mod( 'mobile_menu_options' ) || get_theme_mod( 'mobile_menu_options' ) == 'menu-mobile-hamburger' ) {

		// hamburger
		wp_enqueue_script( 'wpbf-mobile-menu-hamburger', get_template_directory_uri() . '/js/min/mobile-hamburger-min.js', array( 'jquery', 'wpbf-site' ), WPBF_VERSION, true );		

	} elseif( get_theme_mod( 'mobile_menu_options' ) == 'menu-mobile-default' ) {

		// default
		wp_enqueue_script( 'wpbf-mobile-menu-default', get_template_directory_uri() . '/js/min/mobile-default-min.js', array( 'jquery', 'wpbf-site' ), WPBF_VERSION, true );		

	}

	// style.css
	wp_enqueue_style( 'wpbf-style', get_template_directory_uri() . '/style.css', '', WPBF_VERSION );

	// responsive.css
	wp_enqueue_style( 'wpbf-responsive', get_template_directory_uri() . '/css/min/responsive-min.css', '', WPBF_VERSION );

	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	if ( is_rtl() ) {

		wp_enqueue_style( 'wpbf-rtl', get_template_directory_uri() . '/css/min/rtl-min.css', '', WPBF_VERSION );

	}

}

function create_posttype() {
	register_post_type( 'artistas',
	array(
		'labels' => array(
			'name' => __( 'Artistas' ),
			'singular_name' => __( 'Artista' )
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'artista' ),
		'menu_position' => 5,
		'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' )
		)
	);
}
add_action ( 'init', 'create_posttype' );

// Init
require_once( WPBF_THEME_DIR . '/inc/init.php' );