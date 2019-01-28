<?php
// Footer Info

$wp_customize->add_section('construction_zone_footer_info', array(
  'title'   => __('Footer Info', 'construction-zone'),
  'description' => '',
  'panel' => 'frontpage',
  'priority'    => 165
));

$wp_customize->add_setting(
'construction_zone_footer_section_hideshow',
array(
	'default' => 'show',
	'sanitize_callback' => 'construction_zone_footer_sanitize_select',
)
);
$construction_zone_footer_section_hide_show_option = construction_zone_footer_section_option();
$wp_customize->add_control(
'construction_zone_footer_section_hideshow',
array(
	'type' => 'radio',
	'label' => esc_html__('Footer Option', 'construction-zone'),
	'description' => esc_html__('Show/hide option for Footer Section.', 'construction-zone'),
	'section' => 'construction_zone_footer_info',
	'choices' => $construction_zone_footer_section_hide_show_option,
	'priority' => 1
)
);
$wp_customize->add_setting('construction_zone_footer_text', array(
      'default'   => '',
      'type'      => 'theme_mod',
	  'sanitize_callback'	=> 'wp_kses_post'
    ));

    $wp_customize->add_control('construction_zone_footer_text', array(
      'label'   => __('Copyright', 'construction-zone'),
      'section' => 'construction_zone_footer_info',
	   'type'      => 'textarea',
      'priority'  => 1
    ));

 
?>