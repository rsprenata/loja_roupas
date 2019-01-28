
<?php
/**
 * Template part - Features Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Construction Zone
 */
    $enable_service     = get_theme_mod( 'construction_zone_service_section_hideshow','hide');
    $col_layout         = get_theme_mod( 'construction_zone_service_col_layout', '' );
   
    $services_no        = 6;
    $services_pages      = array();
    $services_icons     = array();
    for( $i = 1; $i <= $services_no; $i++ ) {
        $services_pages[]    =  get_theme_mod( "construction_zone_service_page_$i", 1 );
		$services_icons[]    = get_theme_mod( "construction_zone_page_service_icon_$i", '' );
    }
	$services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $services_pages ),
        'posts_per_page' => absint($services_no),
        'orderby' => 'post__in'
	   
    ); 
	
$services_query = new   wp_Query( $services_args );
if( $enable_service == "show" && $services_query->have_posts() ) :
?>
<!-- Page About Us Details Area Start Here -->
<div class="page-about-us-details-area section-space-110-64">	
	<div class="container">
		<?php if(get_theme_mod('construction_zone_service_heading')) {?>
			<div class="row">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="section-title-area">
						<h2 class="section-title">
						<?php echo esc_html(get_theme_mod('construction_zone_service_heading')); ?></h2>						
						<div class="title-bottom-icon">
							<span class="title-bottom-border"></span>
						</div> 						
						<p>	<?php echo  esc_html(get_theme_mod('construction_zone_service_content')); ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="row inner-section-space-top">	
			<?php
			$count = 0;
			while($services_query->have_posts()) :
			$services_query->the_post();
			?>
			
			<div class="col-lg-<?php echo esc_html($col_layout); ?> col-md-<?php echo esc_html($col_layout); ?> col-sm-4 col-xs-12">
				<div class="page-about-us-details-box margin-b-30">
					<a href="<?php the_permalink(); ?>"><i class="fa <?php echo esc_html($services_icons[$count]); ?>" aria-hidden="true"></i></a>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
		?>	
		</div>	
	</div> 
</div>	
 <!-- Page About Us Details Area End Here -->
<?php
    endif;
?>
 