<?php

	// Blog section
	$wp_customize->add_section('construction_zone-blog_info', array(
      'title'   => __('Home Blog Info', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 160
    ));
	
	$wp_customize->add_setting(
    'construction_zone_blog_section_hideshow',
    array(
        'default' => 'show',
        'sanitize_callback' => 'construction_zone_blog_sanitize_select',
    )
    );
    $construction_zone_blog_section_hide_show_option = construction_zone_blog_section_option();
    $wp_customize->add_control(
    'construction_zone_blog_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Blog Option', 'construction-zone'),
        'description' => esc_html__('Show/hide option for Blog Section.', 'construction-zone'),
        'section' => 'construction_zone-blog_info',
        'choices' => $construction_zone_blog_section_hide_show_option,
        'priority' => 1
    )
    ); 
	
	$wp_customize->add_setting('construction_zone_blog_heading', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_blog_heading', array(
      'label'   => __('Blog Section Heading', 'construction-zone'),
      'section' => 'construction_zone-blog_info',
      'priority'  => 2
    ));

    $wp_customize->add_setting('construction_zone_blog_content', array(
    'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_blog_content', array(
      'label'   => __('Blog Section Sub Heading', 'construction-zone'),
      'section' => 'construction_zone-blog_info', 
	  'priority'  => 3
    ));
	
	 $wp_customize->add_setting('construction_zone_btn_blog', array(
    //  'default'   => __('Read More', 'construction-zone'),
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'sanitize_text_field'
    ));

    $wp_customize->add_control('construction_zone_btn_blog', array(
      'label'   => __('Button Text', 'construction-zone'),
      'section' => 'construction_zone-blog_info',
      'priority'  => 4
    ));
	

?>