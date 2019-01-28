<?php 
/**
 * Template Name: Home Page
 *
 */
get_header(); 
get_template_part( 'section-parts/construction_zone_front', 'page-image' );
get_template_part( 'section-parts/construction_zone_front', 'page-feature' );
get_template_part( 'section-parts/construction_zone_front', 'page-aboutus' );
get_template_part( 'section-parts/construction_zone_front', 'page-services' );
get_template_part( 'section-parts/construction_zone_front', 'content-page' );
get_template_part( 'section-parts/construction_zone_front', 'page-blogpost' );

get_footer();?>

