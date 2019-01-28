<?php

/**
 * construction-zone functions and definitions
 *
 */

if( ! function_exists( 'construction_zone_theme_setup' ) ) {

	function construction_zone_theme_setup() {
		
	    load_theme_textdomain( 'construction-zone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 		

		// Add default logo support		
        add_theme_support( 'custom-logo' );	

        // To use additional css
 	    add_editor_style( 'css/editor-style.css' );		

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );
	    
		add_theme_support('post-thumbnails');
		
		
		add_image_size('construction_zone-photo-home', 360, 244, true);
		add_image_size('construction_zone-photo-single', 847, 411, true);
		add_image_size('construction_zone-photo-blog', 408, 244, true);
		
		$defaults = array(
			'default-image'          => get_template_directory_uri() .'/assets/img/banner.jpg',
			'width'                  => 1920,
			'height'                 => 540,
			'uploads'                => true,
			);
		add_theme_support( 'custom-header', $defaults );

		/**
		* Set the content width in pixels, based on the theme's design and stylesheet.
		*/
		$GLOBALS['content_width'] = apply_filters( 'construction_zone_content_width', 980 );
		
		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );
		 
		 add_theme_support( 'customize-selective-refresh-widgets' );
		 
		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );
		
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	   
		// Menus
		register_nav_menus(array(
       'primary' => __('Primary Menu', 'construction-zone')
       ));	
		//About Theme		
		if ( is_admin() ) {
			require( get_template_directory() . '/inc/welcome-screen.php');
		}	

	}
	add_action( 'after_setup_theme', 'construction_zone_theme_setup' );
}

/**
 * Customizer additions.
 */
  // Register Nav Walker class_alias
require_once('wp_bootstrap_navwalker.php');
require get_template_directory(). '/inc/customizer.php';
require get_template_directory(). '/inc/extras.php';


/**
 * Enqueue CSS stylesheets
 */
  
if( ! function_exists( 'construction_zone_enqueue_styles' ) ) {
	function construction_zone_enqueue_styles() {
		
	// Bootstrap CSS 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '', 'all');
	wp_enqueue_style('construction-zone-font-Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,300,200,100', array(),null);
	wp_enqueue_style('construction-zone-font-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400,600,700', array(),null);
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '', 'all');		
	wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '', 'all');		
	wp_enqueue_style('nivo-slider', get_template_directory_uri() . '/assets/css/nivo-slider.css', array(), '', 'all');			
	wp_enqueue_style( 'construction-zone-style', get_stylesheet_uri() );
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '', 'all');	
	
	}
	add_action( 'wp_enqueue_scripts', 'construction_zone_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */

if( ! function_exists( 'construction_zone_enqueue_scripts' ) ) {
	function construction_zone_enqueue_scripts() {
   
	    wp_enqueue_script('jquery');		
	    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '', true);
		wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), '', true);
		wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.js', array(), '', true);
		wp_enqueue_script('scrollUp-js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array(), '', true);
		wp_enqueue_script('construction-zone-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);		
	}
	add_action( 'wp_enqueue_scripts', 'construction_zone_enqueue_scripts' );
}

/**
 * admin  JS scripts
 */
function construction_zone_admin_enqueue_scripts( $hook ) { 
	wp_enqueue_style( 
		'font-awesome', 
		get_template_directory_uri() . '/assets/css/font-awesome.css', 
		array(), 
		'4.7.0', 
		'all' 
	);
	wp_enqueue_style( 
		'erzen-admin', 
		get_template_directory_uri() . '/assets/admin/css/admin.css', 
		array(), 
		'1.0.0', 
		'all' 
	);
 
}
add_action( 'admin_enqueue_scripts', 'construction_zone_admin_enqueue_scripts' );

/**
 * Register sidebars for construction-zone
*/

function construction_zone_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "construction-zone"),
		'id' => 'construction_zone_blog_sidebar',
		'description' => __( 'Sidebar on the blog layout.', "construction-zone"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title sidebar-title">',
		'after_title' => '</h3>'
	));	

	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "construction-zone"),
		'id' => 'construction_zone_footer-widget-area-1',
		'description' => __( 'The footer widget area 1', "construction-zone"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title sidebar-title">',
		'after_title' => '</h3>'
	));	
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "construction-zone"),
		'id' => 'construction_zone_footer-widget-area-2',
		'description' => __( 'The footer widget area 2', "construction-zone"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title sidebar-title">',
		'after_title' => '</h3>'
	));	
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "construction-zone"),
		'id' => 'construction_zone_footer-widget-area-3',
		'description' => __( 'The footer widget area 3', "construction-zone"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title sidebar-title">',
		'after_title' => '</h3>'
	));	
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 4', "construction-zone"),
		'id' => 'construction_zone_footer-widget-area-4',
		'description' => __( 'The footer widget area 4', "construction-zone"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title sidebar-title">',
		'after_title' => '</h3>'
	));		
}

add_action( 'widgets_init', 'construction_zone_sidebars' );


/*
* TGM plugin activation register hook 
*/

require_once get_template_directory() . '/extras/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/extras/theme-default-setup.php';

/**
 * Load Upsell Button In Customizer
 * 2016 &copy; [Justin Tadlock](http://justintadlock.com).
 */

require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/class-customize.php' );

add_action( 'admin_init', 'construction_zone_detect_button' );
	function construction_zone_detect_button() {
	wp_enqueue_style( 'construction-zone-info-button', get_template_directory_uri() . '/assets/css/import-button.css' );
}

/*-----------------------------------------------------------------------------------*/
# Custom Comments Template
/*-----------------------------------------------------------------------------------*/
function construction_zone_comments( $comment, $args, $depth ) {
	//get theme data
	global $comment_data;

	//translations
	$leave_reply = $comment_data['translation_reply_to_coment'] ? $comment_data['translation_reply_to_coment'] : 
	__('<i class="fa fa-reply"></i> Reply','construction-zone'); ?>
	
		<div class="media ">
			<a href="#" class="pull-left media-left">
				 <?php echo get_avatar($comment,$size = '120'); ?>
			</a>
			<div class="media-body">
				<h3><a href="#"><?php comment_author();?></a></h3>
				<p><?php comment_date('F j, Y');?> @ <?php comment_time('g:i a'); ?></p>
				<p><?php comment_text() ; ?></p>
				<div class="replay-area">
					 <?php comment_reply_link(array_merge( $args, array('reply_text' => $leave_reply,'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>
			<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'construction-zone' ); ?></em>
			<br/>
			<?php endif; ?>	
		</div>
	<?php
}



?>