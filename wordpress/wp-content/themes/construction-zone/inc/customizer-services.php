<?php
   
/**
 * Home Service Options
 *
 * @package construction-zone
 */


 $wp_customize->add_section('construction_zone_service_info', array(
      'title'   => __('Home Services', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 154
    ));
	
	$wp_customize->add_setting(
    'construction_zone_service_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'construction_zone_service_sanitize_select',
    )
    );
    $construction_zone_f_section_hide_show_option = construction_zone_service_section_option();
    $wp_customize->add_control(
    'construction_zone_service_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show/hide option for Service Section.', 'construction-zone'),
        'description' => '',
        'section' => 'construction_zone_service_info',
        'choices' => $construction_zone_f_section_hide_show_option,
        'priority' => 1
    )
    );
// column layout
$wp_customize->add_setting(
'construction_zone_service_col_layout',
array(
	'default' => 4,
	'sanitize_callback' => 'construction_zone_s_col_layout_sanitize_select',
)
);
$construction_zone_s_section_col_layout = construction_zone_s_col_layout_option();
$wp_customize->add_control(
'construction_zone_service_col_layout',
array(
	'type' => 'radio',
	'label' => esc_html__('Column Layout option for Service Section.', 'construction-zone'),
	'description' => '',
	'section' => 'construction_zone_service_info',
	'choices' => $construction_zone_s_section_col_layout,
	'priority' => 2
)
);

$wp_customize->add_setting('construction_zone_service_heading', array(
     'default'   =>  '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_service_heading', array(
      'label'   => __('Service Heading', 'construction-zone'),
      'section' => 'construction_zone_service_info',
      'priority'  => 3
    ));

    $wp_customize->add_setting('construction_zone_service_content', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_service_content', array(
      'label'   => __('Service Section Sub Heading', 'construction-zone'),
      'section' => 'construction_zone_service_info', 
	  'priority'  => 4
    ));

// service 1
	
	$services_no = 6;
	for( $i = 1; $i <= $services_no; $i++ ) 
	{
		$construction_zone_servicepage = 'construction_zone_service_page_' . $i;
		$construction_zone_serviceicon = 'construction_zone_page_service_icon_' . $i;
	
		// Setting - Feature Icon
		$wp_customize->add_setting( $construction_zone_serviceicon,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $construction_zone_serviceicon,
			array(
				'label'    			=> esc_html__( 'Service Icon ', 'construction-zone' ).$i,
				'description' =>  __('Select a icon in this list <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Font Awesome icons</a> and enter the code','construction-zone'),
				'section'  			=> 'construction_zone_service_info',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
		
		// Setting - Service Page
		$wp_customize->add_setting( $construction_zone_servicepage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'construction_zone_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $construction_zone_servicepage,
			array(
				'label'    			=> esc_html__( 'Service Page ', 'construction-zone' ).$i,
				'section'  			=> 'construction_zone_service_info',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);
	   
		$wp_customize->add_setting('construction_zone_s_read_1',array(
				'default'	=> '',
				'sanitize_callback'	=> 'construction_zone_service_sanitize_select'
		));
		
		$wp_customize->add_control('construction_zone_s_read_1',array(
				'type' => 'text',
				'label'	=> __('Read More Button Text','construction-zone'),
				'description' => '',
				'section'	=> 'construction_zone_service_info',
				'priority'  => 101
		));
	}	
?>
