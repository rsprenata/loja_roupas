<?php
// Header info
   $wp_customize->add_section('construction_zone_header_info', array(
      'title'   => __('Top Header Info', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 150
    ));
	
	$wp_customize->add_setting(
    'construction_zone_header_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'construction_zone_header_sanitize_select',
    )
    );
    $construction_zone_header_section_hide_show_option = construction_zone_header_section_option();
    $wp_customize->add_control(
    'construction_zone_header_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Header Option', 'construction-zone'),
        'description' => esc_html__('Show/hide option for Header Section.', 'construction-zone'),
        'section' => 'construction_zone_header_info',
        'choices' => $construction_zone_header_section_hide_show_option,
        'priority' => 1
    )
    );
	
	
   $wp_customize->add_setting('construction_zone_header_email_value', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_header_email_value', array(
      'label'   => __('Email', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 3
    ));
	
	
	$wp_customize->add_setting('construction_zone_header_phone_value', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_header_phone_value', array(
      'label'   => __('Contact Number', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 5
    ));
	
	$wp_customize->add_setting('construction_zone_header_social_link_1', array(
     'default'   =>  '',
      'type'      => 'theme_mod',
	  'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_header_social_link_1', array(
      'label'   => __('Facebook Page URL', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 7
    ));
	
	$wp_customize->add_setting('construction_zone_header_social_link_2', array(
    'default'   => '',
      'type'      => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_header_social_link_2', array(
      'label'   => __('Twitter URL', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 9
    ));
	
	$wp_customize->add_setting('construction_zone_header_social_link_3', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_header_social_link_3', array(
      'label'   => __('Instagram', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 11
    ));

	$wp_customize->add_setting('construction_zone_header_social_link_4', array(
     'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('construction_zone_header_social_link_4', array(
      'label'   => __('Youtube Channel URL', 'construction-zone'),
      'section' => 'construction_zone_header_info',
      'priority'  => 13
    ));
	
	
	
	$wp_customize->add_setting('construction_zone_blog_b_image', array(     
	'default'   => '',
    'type'      => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'construction_zone_blog_b_image', array(
      'label'   => __('Background Image', 'construction-zone'),
      'section' => 'construction_zone_breadcrumb_info',
      'settings' => 'construction_zone_blog_b_image',
      'priority'  => 2
    )));
?>