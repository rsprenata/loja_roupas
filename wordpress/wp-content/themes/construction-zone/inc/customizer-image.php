<?php
   
// Image Info
	
    $wp_customize->add_section('construction_zone_image_info', array(
      'title'   => __('Home Intro', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 151
    ));
	
	$wp_customize->add_setting(
    'construction_zone_image_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'construction_zone_image_sanitize_select',
    )
    );
    $construction_zone_i_section_hide_show_option = construction_zone_image_section_option();
    $wp_customize->add_control(
    'construction_zone_image_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show/hide option for Image Section.', 'construction-zone'),
        'description' => '',
        'section' => 'construction_zone_image_info',
        'choices' => $construction_zone_i_section_hide_show_option,
        'priority' => 1
    )
    );
	
	$wp_customize->add_setting('construction_zone_b_image', array(     
	'default'   => '',
    'type'      => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'construction_zone_b_image', array(
      'label'   => __('Image', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'settings' => 'construction_zone_b_image',
      'priority'  => 2
    )));
	
	$wp_customize->add_setting('construction_zone_image_heading', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_image_heading', array(
      'label'   => __('Heading', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 4
    ));	
	
	$wp_customize->add_setting('construction_zone_image_subheading', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_image_subheading', array(
      'label'   => __('Sub Heading', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 4
    ));
	
	$wp_customize->add_setting('construction_zone_image_more', array(
      'default'   =>'',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_image_more', array(
      'label'   => __('Button 1 - Text', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 7
    ));
	
	$wp_customize->add_setting('construction_zone_image_more_url', array(
     'default'   =>  '',
      'type'      => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_image_more_url', array(
      'label'   => __('Button 1 - URL', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 8
    ));
	
	$wp_customize->add_setting('construction_zone_image_contact', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_image_contact', array(
      'label'   => __('Button 2 - Text', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 9
    ));
	
	$wp_customize->add_setting('construction_zone_image_contact_url', array(
    'default'   => '',
      'type'      => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_image_contact_url', array(
      'label'   => __('Button 2 - URL', 'construction-zone'),
      'section' => 'construction_zone_image_info',
      'priority'  => 10
    ));
?>