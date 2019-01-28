<?php
/**
 * Template part - About Us Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Construction Zone
 */
 
 $enable_about     = get_theme_mod( 'construction_zone_aboutus_section_hideshow','hide');
   
    $about_no        = 1;
    $about_pages      = array();
    for( $i = 1; $i <= $about_no; $i++ ) {
        $about_pages[]    =  get_theme_mod( "construction_zone_about_page_$i", 1 );
	}
	$about_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $about_pages ),
        'posts_per_page' => absint($about_no),
        'orderby' => 'post__in'
	   
    ); 
	
$about_query = new   wp_Query( $about_args );

if( $enable_about == "show" && $about_query->have_posts() ) :
?>
<!-- Page About Us Area Start Here -->
<div class="page-about-us-area section-space">
	<div class="container">
		<div class="row">
				<?php
				while($about_query->have_posts()) :
				$about_query->the_post();
				?>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<div class="page-about-us-left">
						<h2><?php the_title(); ?></h2>						
						<?php the_content(); ?>			
						
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="page-about-us-right">
						<?php the_post_thumbnail(''); ?>
					</div>
				</div>
				<?php				
				endwhile;
				wp_reset_postdata();
			?>	
		</div>
	</div> 
</div>
<!-- Page About Us Area End Here -->
<?php endif; ?>