<?php
   
// Features Section
	
    $wp_customize->add_section('construction_zone_feature_info', array(
      'title'   => __('Home Features', 'construction-zone'),
      'description' => '',
	  'panel' => 'frontpage',
      'priority'    => 152
    ));
	
	$wp_customize->add_setting(
    'construction_zone_feature_section_hideshow',
    array(
        'default' => 'hide',
        'sanitize_callback' => 'construction_zone_feature_sanitize_select',
    )
    );
    $construction_zone_f_section_hide_show_option = construction_zone_feature_section_option();
    $wp_customize->add_control(
    'construction_zone_feature_section_hideshow',
    array(
        'type' => 'radio',
        'label' => esc_html__('Show/hide option for Feature Section.', 'construction-zone'),
        'description' => '',
        'section' => 'construction_zone_feature_info',
        'choices' => $construction_zone_f_section_hide_show_option,
        'priority' => 1
    )
    );

	// column layout
	$wp_customize->add_setting(
    'construction_zone_feature_col_layout',
    array(
        'default' => 4,
        'sanitize_callback' => 'construction_zone_f_col_layout_sanitize_select',
    )
    );
    $construction_zone_f_section_col_layout = construction_zone_f_col_layout_option();
    $wp_customize->add_control(
    'construction_zone_feature_col_layout',
    array(
        'type' => 'radio',
        'label' => esc_html__('Column Layout option for Feature Section.', 'construction-zone'),
        'description' => '',
        'section' => 'construction_zone_feature_info',
        'choices' => $construction_zone_f_section_col_layout,
        'priority' => 2
    )
    );

	
	$features_no = 3;
	for( $i = 1; $i <= $features_no; $i++ ) {
		$construction_zone_featurepage = 'construction_zone_features_page_' . $i;
		$construction_zone_featureicon = 'construction_zone_page_features_icon_' . $i;

		$wp_customize->add_setting( $construction_zone_featurepage,
			array(
				'default'           => 1,
				'sanitize_callback' => 'construction_zone_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control( $construction_zone_featurepage,
			array(
				'label'    			=> esc_html__( 'Feature Page ', 'construction-zone' ).$i,
				'section'  			=> 'construction_zone_feature_info',
				'type'     			=> 'dropdown-pages',
				'priority' 			=> 100,
			)
		);

		// Setting - Feature Icon
		$wp_customize->add_setting( $construction_zone_featureicon,
			array(
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( $construction_zone_featureicon,
			array(
				'label'    			=> esc_html__( 'Feature Icon ', 'construction-zone' ).$i,
				'description' =>  __('Select a icon in this list <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Font Awesome icons</a> and enter the code','construction-zone'),
				'section'  			=> 'construction_zone_feature_info',
				'type'     			=> 'text',
				'priority' 			=> 100,
			)
		);
	}
	
	
?>