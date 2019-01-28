<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Construction Zone
 */
 
$construction_zone_footer_section = get_theme_mod('construction_zone_footer_section_hideshow','show');
if ($construction_zone_footer_section =='show') { 			?>
	<?php			
	if (is_active_sidebar('construction_zone_footer-widget-area-1') || is_active_sidebar('construction_zone_footer-widget-area-2') || is_active_sidebar('construction_zone_footer-widget-area-3') || is_active_sidebar('construction_zone_footer-widget-area-4')) {
	?>			
	        <footer>
				<div class="footer-area-top section-space-b-less-30">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
								<?php dynamic_sidebar('construction_zone_footer-widget-area-1'); ?>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
								<?php dynamic_sidebar('construction_zone_footer-widget-area-2'); ?>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
								<?php dynamic_sidebar('construction_zone_footer-widget-area-3'); ?>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
								<?php dynamic_sidebar('construction_zone_footer-widget-area-4'); ?>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>				
				<div class="footer-area-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php if( get_theme_mod('construction_zone_footer_text') ) : ?>
									<span><?php echo wp_kses_post( html_entity_decode(get_theme_mod('construction_zone_footer_text'))); ?></span>
								<?php endif;  ?>
							</div>
						</div>
					</div>
				</div>
	        </footer>
			<?php } ?>
			<?php wp_footer(); ?>
	        <!-- Footer Area End Here -->
		</div>
		<!-- Preloader Start Here -->
	    <div id="preloader"></div>
	    <!-- Preloader End Here -->
	    <?php get_template_part( 'section-parts/construction_zone_front', 'mobmenu' ); ?>
    </body>
</html>
