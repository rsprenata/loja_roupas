<?php
/**
 * construction-zone Theme Customizer
 *
 */
function construction_zone_customize_register( $wp_customize ) {
	
	 /*default variable used in setting*/
        
	require get_template_directory() . '/inc/construction_zone_theme-options.php';
	require get_template_directory() . '/inc/construction_zone_sanitize.php';
/** Front Page Section Settings starts **/	

$wp_customize->add_panel('frontpage', 
	array('title' => __('Construction Zone Options', 'construction-zone'),        
	'description' => '',                                        
	'priority' => 3,));
	
    require get_template_directory() . '/inc/customizer-image.php';	
	require get_template_directory() . '/inc/customizer-feature.php';
    require get_template_directory() . '/inc/customizer-services.php';
	require get_template_directory() . '/inc/customizer-aboutus.php';
	require get_template_directory() . '/inc/customizer-blogpost.php';
	require get_template_directory() . '/inc/customizer-header.php';
	require get_template_directory() . '/inc/customizer-footer.php';
	
	
/** Front Page Section Settings end **/	


}
add_action( 'customize_register', 'construction_zone_customize_register' );

