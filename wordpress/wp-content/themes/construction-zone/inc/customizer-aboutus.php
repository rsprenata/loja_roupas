<?php
   
// About Us Section
	
    $wp_customize->add_section('construction_zone_about_info', array(
      'title'   => __('Home About Us', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 153
    ));
	
	$wp_customize->add_setting(
    'construction_zone_aboutus_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'construction_zone_about_sanitize_select',
    )
    );
    $construction_zone_a_section_hide_show_option = construction_zone_about_section_option();
    $wp_customize->add_control(
    'construction_zone_aboutus_section_hideshow',
    array( 
        'type' => 'radio',
        'label' => esc_html__('Show/hide option for About Us Section.', 'construction-zone'),
        'description' => '',
        'section' => 'construction_zone_about_info',
        'choices' => $construction_zone_a_section_hide_show_option,
        'priority' => 1
    )
    );
	
	$about_no = 1;
	for( $i = 1; $i <= $about_no; $i++ ) {
	$construction_zone_about_page = 'construction_zone_about_page_' . $i;	
    $wp_customize->add_setting( $construction_zone_about_page,
			array(
				'default'           => 1,
				'sanitize_callback' => 'construction_zone_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $construction_zone_about_page,
			array(
				'label'    			=> esc_html__( 'About Page ', 'construction-zone' ).$i,
				'section'  			=> 'construction_zone_about_info',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 4,
			)
		);
	
	}
?>