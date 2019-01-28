<?php
/**
 * Functions hooked to core hooks.
 *
 */

if ( ! function_exists( 'construction_zone_customize_search_form' ) ) :

	function construction_zone_customize_search_form() {

		$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
			<div class="search-box">
				<h3 class="sidebar-search-title">' . _x( 'Search', 'label', 'construction-zone' ) . '</h3>
				<div class="input-group stylish-input-group">
					<input type="text" class="form-control"  placeholder="' . esc_attr_x( 'Type to search here...', 'placeholder', 'construction-zone' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label', 'construction-zone' ) . '" />
					<span class="input-group-addon">
						 <button type="submit">
							<span class="glyphicon glyphicon-search"></span>
						  </button>  
					</span>
				 </div>
			 </div>
		 </form>';

		return $form;

	}
	
	endif;

add_filter( 'get_search_form', 'construction_zone_customize_search_form', 15 );



$construction_zone_page_home = esc_html(__( '3 Home Pages', 'construction-zone' ));
$construction_zone_page_home_details = esc_html(__('Theme supports 3 types of Home Pages with different UI elements styles - slider, projects, services, features, team, about. so more', 'construction-zone' ));
$construction_zone_page_layout = esc_html(__( '4 Header Preset', 'construction-zone' ));
$construction_zone_page_layout_details = esc_html(__('Theme offers 4 tytpes of header navgiation preset so you can change and select your header design', 'construction-zone' ));
$construction_zone_unlimited_color = esc_html(__( 'Unlimited Color Scheme', 'construction-zone' ));
$construction_zone_unlimited_color_details = esc_html(__( 'Theme support Unlimited Color Option that mean you can design your website with any color.', 'construction-zone' ));
$construction_zone_custom_contact = esc_html(__( 'Contact Form 7', 'construction-zone' ));
$construction_zone_custom_contact_details = esc_html(__( 'Construction Zone Pro support contact form 7 that mean you can easily add your contact form with theme design ', 'construction-zone' ));
$construction_zone_portfolio = esc_html(__( 'Projects Page', 'construction-zone' ));
$construction_zone_portfolio_details = esc_html(__( 'Theme have 6 types of Projctes deslin presets with you can use 2, 3, or 4 Columns with masonry layouts!', 'construction-zone' ));
$construction_zone_typography = esc_html(__( 'Typography', 'construction-zone' ));
$construction_zone_typography_details = esc_html(__('Theme loves typography, you can choose from over 500+ Google Fonts and Standard Fonts to customize your site!', 'construction-zone' ));
$construction_zone_slider = esc_html(__( 'Unlimitd Image Slides', 'construction-zone' ));
$construction_zone_slider_details = esc_html(__('Theme includes Flex slider . You can add unlimited slides on your home page', 'construction-zone' ));
$construction_zone_pricing = esc_html(__( 'Team Page', 'construction-zone' ));
$construction_zone_pricing_details = esc_html(__('You can add unlimited team members with team deatil page and also display their social profiles ', 'construction-zone' ));
$construction_zone_retina_ready = esc_html(__( 'Retina Ready', 'construction-zone' ));
$construction_zone_retina_ready_details = esc_html(__( 'Theme is Retina Ready. So, Everything looks amazingly sharp and crisp on high resolution retina displays of all sizes!', 'construction-zone' ));
$construction_zone_icons = esc_html(__( 'Construction Icons', 'construction-zone' ));
$construction_zone_icons_details = esc_html(__( ' Choose from over 2500+ icons are fully integrated into the theme and theme aslo has 40+ cocnstrsuction icons for you. ', 'construction-zone' ));
$construction_zone_support = esc_html(__( 'Excellent Support', 'construction-zone' ));
$construction_zone_support_details = esc_html(__( 'We truly care about our customers and themes performance. We assure you that you will get the best after sale support like never before!', 'construction-zone' ));
$construction_zone_responsive_layout = esc_html(__( 'Responsive Layout', 'construction-zone' ));
$construction_zone_responsive_layout_details = esc_html( __('Theme is fully responsive and can adapt to any screen size. Resize your browser window to view it!', 'construction-zone' ));
$construction_zone_testimonials = esc_html( __( 'Testimonials', 'construction-zone' ));
$construction_zone_testimonials_details = esc_html( __( 'Display your clients\' glowing comments about your business on your homepage. Showing a specific number of testimonials with use of testimonial widget. ', 'construction-zone' ));
$construction_zone_social_media = esc_html( __( 'Social Media', 'construction-zone' ));
$construction_zone_social_media_details = esc_html( __( 'Want your users to stay in touch? No problem, Theme has Social Media icons all throughout the theme!', 'construction-zone' ));
$construction_zone_google_map = esc_html( __( 'Add Timeline', 'construction-zone' ));
$construction_zone_google_map_details = esc_html( __('This Theme includes Timeline shortcode, So you can easily display your company history to your visitors or  your clients', 'construction-zone' ));
$construction_zone_customization = esc_html( __( 'Customization', 'construction-zone' ));
$construction_zone_customization_details = esc_html( __('With advanced theme options, page options & extensive docs, its never been easier to customize a theme!', 'construction-zone' ));
$construction_zone_demo_content = esc_html( __( 'Demo content', 'construction-zone' ));
$construction_zone_demo_content_details = esc_html( __('Theme includes single click demo content. You can quickly setup the site like our demo and get started easily!', 'construction-zone' ));
$construction_zone_improvement = esc_html( __( 'Improvement', 'construction-zone' ));
$construction_zone_improvement_details = esc_html( __('We love our theme and customers. We are committed to improve and add new features to Theme!', 'construction-zone' ));

$construction_zone_view_demo = esc_html( __( 'View Demo', 'construction-zone'));
$construction_zone_upgrade_to_pro = esc_html( __( 'Upgrade To Pro', 'construction-zone' ));

$construction_zone_why_upgrade = <<< FEATURES

<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-cog"></i></div>
	<h3>$construction_zone_page_home</h3>
	<p>$construction_zone_page_home_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th-large"></i></div>
	<h3>$construction_zone_page_layout</h3>
	<p>$construction_zone_page_layout_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-th"></i></div>
	<h3>$construction_zone_unlimited_color</h3>
	<p>$construction_zone_unlimited_color_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-envelope"></i></div>
	<h3>$construction_zone_custom_contact</h3>
	<p>$construction_zone_custom_contact_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-list-alt"></i></div>
	<h3>$construction_zone_portfolio</h3>
	<p>$construction_zone_portfolio_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-font"></i></div>
	<h3>$construction_zone_typography</h3>
	<p>$construction_zone_typography_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-slideshare"></i></div>
	<h3>$construction_zone_slider</h3>
	<p>$construction_zone_slider_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-user"></i></div>
	<h3>$construction_zone_pricing</h3>
	<p>$construction_zone_pricing_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3>$construction_zone_retina_ready</h3>
	<p>$construction_zone_retina_ready_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-dashboard"></i></div>
	<h3>$construction_zone_icons</h3>
	<p>$construction_zone_icons_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-magic"></i></div>
	<h3>$construction_zone_support</h3>
	<p>$construction_zone_support_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-desktop"></i></div>
	<h3>$construction_zone_responsive_layout</h3>
	<p>$construction_zone_responsive_layout_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-rocket"></i></div>
	<h3>$construction_zone_testimonials</h3>
	<p>$construction_zone_testimonials_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-skype"></i></div>
	<h3>$construction_zone_social_media</h3>
	<p>$construction_zone_social_media_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-map-marker"></i></div>
	<h3>$construction_zone_google_map</h3>
	<p>$construction_zone_google_map_details</p>
</div>
<div class="one-third column clear">
	<div class="icon-wrap"><i class="fa  fa-5x fa-edit"></i></div>
	<h3>$construction_zone_customization</h3>
	<p>$construction_zone_customization_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-check"></i></div>
	<h3>$construction_zone_demo_content</h3>
	<p>$construction_zone_demo_content_details</p>
</div>
<div class="one-third column">
	<div class="icon-wrap"><i class="fa  fa-5x fa-signal"></i></div>
	<h3>$construction_zone_improvement</h3>
	<p>$construction_zone_improvement_details</p>
</div>
FEATURES;

function construction_zone_theme_page() {
	$title = esc_html(__('Construction Zone Theme','construction-zone'));
	add_theme_page( 
		esc_html(__( 'Upgrade To Construction Zone Pro','construction-zone')),
		$title.'', 
		'edit_theme_options',
		'construction_zone_upgrade',
		'construction_zone_display_upgrade'
	);
}

add_action('admin_menu','construction_zone_theme_page');


function construction_zone_display_upgrade() {
  $theme_data = wp_get_theme('construction-zone'); 
    
    // Check for current viewing tab
    $tab = null;
    if ( isset( $_GET['tab'] ) ) {
        $tab = $_GET['tab'];
    } else {
        $tab = null;
    } 
     
    $pro_theme_url = 'http://dazzlersoftware.com/themes/construction-zone-pro/';
    $pro_theme_demo = 'http://dazzlersoftware.com/themes/demo-construction-zone-pro/';
    $doc_url  = 'http://dazzlersoftware.com/doc/construction-zone-doc/index.html';
    $support_url = 'https://wordpress.org/support/theme/construction-zone';   
    $rating_url = 'https://wordpress.org/support/theme/construction-zone/reviews/?filter=5';   
    
    $current_action_link =  admin_url( 'themes.php?page=construction_zone_upgrade&tab=pro_features' ); ?>
    <style>
	.about-wrap .about-text {
		margin: 0em 0px 0em 0  !important;;
		margin-bottom: 25px !important;
		min-height: 60px;
		color: #555d66;
	}
	.about-wrap {		
		max-width: 1200px;	
	}
	</style>
	<div class="construction-zone-wrapper about-wrap">
        <h1><?php printf(esc_html__('Welcome to %1$s - Version %2$s', 'construction-zone'), $theme_data->Name ,$theme_data->Version ); ?></h1><?php
       	printf( __('<div class="about-text"> Construction zone is a free construction wordpress. Theme has responsive design made with bootstrap, retina ready blog layout enable and with sidebar. Construction zone comes with full screen slider, high quality Home Page including gallery or portfolio section, testimonial section, service section, team section, recent post section & client logo section. Construction zone fully customizable built on wordpress customizer that enable you to configure your website in live preview. Theme is SEO friendly, Cross browser compatible And compatible with all major plugins.', 'construction-zone') ); ?>
       <p class="upgrade-btn"><a class="upgrade" href="<?php echo esc_url($pro_theme_url); ?>" target="_blank"><?php printf( __( 'Upgrade To %1s Pro - $55', 'construction-zone'), $theme_data->Name ); ?></a></p>

	   <h2 class="nav-tab-wrapper">
	        <a href="?page=construction_zone_upgrade" class="nav-tab<?php echo is_null($tab) ? ' nav-tab-active' : null; ?>"><?php echo $theme_data->Name; ?></a>
<a href="?page=construction_zone_upgrade&tab=pro_features" class="nav-tab<?php echo $tab == 'pro_features' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'PRO Features', 'construction-zone' );  ?></a>
            <a href="?page=construction_zone_upgrade&tab=free_vs_pro" class="nav-tab<?php echo $tab == 'free_vs_pro' ? ' nav-tab-active' : null; ?>"><?php esc_html_e( 'Free VS PRO', 'construction-zone' ); ?></a>
	        <?php do_action( 'construction_zone_admin_more_tabs' ); ?>
	    </h2>      

        <?php if ( is_null( $tab ) ) { ?>
            <div class="theme_info info-tab-content">
                <div class="theme_info_column clearfix">
                    <div class="theme_info_left">
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Customizer', 'construction-zone' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('%s supports the Theme Customizer for all theme settings. Click "Customize" to start customize your site.', 'construction-zone'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e('Start Customize', 'construction-zone'); ?></a>
                            </p>
                        </div>
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Theme Documentation', 'construction-zone' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Need any help to setup and configure %s? Please have a look at our documentations instructions.', 'construction-zone'), $theme_data->Name); ?></p>
                            <p>
                                <a href="<?php echo esc_url($doc_url); ?>" target="_blank" class="button button-secondary"><?php esc_html_e(' Documentation', 'construction-zone'); ?></a>
                            </p>
                            <?php do_action( 'construction_zone_dashboard_theme_links' ); ?>
                        </div>  
                        <div class="theme_link">
                            <h3><?php esc_html_e( 'Having Trouble, Need Support?', 'construction-zone' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('Support for %s WordPress theme is conducted through Genex free support ticket system.', 'construction-zone'), $theme_data->Name); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($support_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Create a support ticket', 'construction-zone'), $theme_data->Name); ?></a>
                            </p>
                        </div> 
						 <div class="theme_link">
                            <h3><?php esc_html_e( 'Please Rate Us', 'construction-zone' ); ?></h3>
                            <p class="about"><?php printf(esc_html__('We need your help to expand or and portoflio so please rate us on wordpress ', 'construction-zone'), $theme_data->Name); ?></p>
                            <p>  
                                <a href="<?php echo esc_url($rating_url); ?>" target="_blank" class="button button-secondary"><?php echo sprintf( esc_html('Rate This Theme', 'construction-zone'), $theme_data->Name); ?></a>
                            </p>
                        </div> 
                       
                    </div>  
                    <div class="theme_info_right">
                        <?php echo sprintf ( '<img src="'. get_template_directory_uri() .'/screenshot.jpg" alt="%1$s" />',__('Theme screenshot','construction-zone') ); ?>
                    </div>
                </div> 
            </div>
        <?php } ?>
	
        <?php if ( $tab == 'pro_features' ) { ?>
            <div class="pro-features-tab info-tab-content"><?php
			    global $construction_zone_why_upgrade; ?>
				<div class="wrap clearfix">
				    <?php echo $construction_zone_why_upgrade; ?>
				</div>
			</div><?php   
		} ?>  

       <!-- Free VS PRO tab -->
        <?php if ( $tab == 'free_vs_pro' ) { ?>
            <div class="free-vs-pro-tab info-tab-content">
	            <div id="free_pro">
	                <table class="free-pro-table">
		                <thead>
			                <tr>
			                    <th></th>  
			                    <th><?php echo esc_html($theme_data->Name); ?> Lite</th>
			                    <th><?php echo esc_html($theme_data->Name); ?> PRO</th>
			                </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td><h3><?php _e('Responsive Design', 'construction-zone'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                        <td><h3><?php _e('Support', 'construction-zone'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>		                    
		                    <tr>
		                        <td><h3><?php _e('Custom Logo Option', 'construction-zone'); ?></h3></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                        <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                         <td><h3><?php _e('Social Links', 'construction-zone'); ?></h3></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                         <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('Unlimited color option', 'construction-zone'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	 <td><h3><?php _e('3 Home page', 'construction-zone'); ?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							 <tr>
		                    	 <td><h3><?php _e('Header Presets', 'construction-zone'); ?></h3></td>
		                    	 <td class="only-pro"><?php _e('1', 'construction-zone'); ?></td>
		                    	 <td class="only-lite"><?php _e('4', 'construction-zone'); ?></td>
		                    </tr>	
		                     <tr>
		                    	 <td><h3><?php _e('Pre Defined Page Templates', 'construction-zone');?></h3></td>
		                    	 <td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	 <td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('6 Portfolio Presets', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Team With Detail Page', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    <tr>
		                    	<td><h3><?php _e('Redux Theme Option Panel', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr> 
							<tr>
		                    	<td><h3><?php _e('Boxed Layout', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Sticky Header Option', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Contact Form 7', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('15+ Shortcodes', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Google Fonts', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							<tr>
		                    	<td><h3><?php _e('Construction Icons Inbuilt', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Service Layouts', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
							 <tr>
		                    	<td><h3><?php _e('Team Page', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Multiple Blog Layouts', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Page Animation', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                     <tr>
		                    	<td><h3><?php _e('Premium Priority Support', 'construction-zone');?></h3></td>
		                    	<td class="only-pro"><span class="dashicons-before dashicons-no-alt"></span></td>
		                    	<td class="only-lite"><span class="dashicons-before dashicons-yes"></span></td>
		                    </tr>
		                    
		                    <tr class="ti-about-page-text-center">
		                        <td><a href="<?php echo esc_url($pro_theme_demo); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( '%1s Pro Demo', 'construction-zone'), $theme_data->Name ); ?></a></td>
		                    	<td colspan="2"><a href="<?php echo esc_url($pro_theme_url); ?>" target="_blank" class="button button-primary button-hero"><?php printf( __( 'Upgrade To %1s Pro', 'construction-zone'), $theme_data->Name ); ?></a></td>
		                    </tr>
		                </tbody>
	                </table>			    
				</div>
			</div><?php 
		} ?>

    </div><?php
} ?>