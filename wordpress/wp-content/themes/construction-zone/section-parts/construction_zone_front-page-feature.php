<?php
/**
 * Template part - Features Section of FrontPage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Construction Zone
 */
    $enable_feature     = get_theme_mod( 'construction_zone_feature_section_hideshow','hide');
    $col_layout         = get_theme_mod( 'construction_zone_feature_col_layout', '' );
   
    $features_no        = 3;
    $features_pages      = array();
    $feature_icons     = array();
    for( $i = 1; $i <= $features_no; $i++ ) {
        $features_pages[]    = absint( get_theme_mod( "construction_zone_features_page_$i", 1 ) );
        $feature_icons[]    = get_theme_mod( "construction_zone_page_features_icon_$i", '' );
    }
	$features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $features_pages ),
        'posts_per_page' => absint($features_no),
        'orderby' => 'post__in'
		
       
    ); 

$features_query = new   wp_Query( $features_args );
if( $enable_feature == "show" && $features_query->have_posts() ) :
?>
<section  class="features section">
	 	<div class="service-area">
			<div class="row">
				<?php
				$count = 0;
				while($features_query->have_posts()) :
				$features_query->the_post();
				?>
					<div class="col-lg-<?php echo esc_html($col_layout); ?> col-md-<?php echo esc_html($col_layout); ?> col-sm-4 col-xs-12">
						<div class="service-box <?php if($count==1){echo "active";}?>" >
							<div class="service-box-top">
								<a href="<?php the_permalink(); ?>"><i class="fa <?php echo esc_html($feature_icons[$count]); ?>"></i></a>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="service-read-more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				<?php
				$count = $count + 1;
			endwhile;
			wp_reset_postdata();
			?>
			</div>
		</div>
	 <!-- .row -->
	</div><!-- .container -->

</section> 
<?php
    endif;
?>	

