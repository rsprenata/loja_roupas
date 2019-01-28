<!-- News Area Start Here -->
<?php 			
$construction_zone_btn_blog = get_theme_mod('construction_zone_btn_blog',"");			
$construction_zone_blog_section =  get_theme_mod( 'construction_zone_blog_section_hideshow', 'show' );
if ($construction_zone_blog_section =='show') { ?>			
	<div class="news-area section-space-88-100">
		<div class="container">
			<?php if(get_theme_mod('construction_zone_blog_heading')) {?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="section-title-area">						
							<h2 class="section-title"><?php echo esc_html(get_theme_mod('construction_zone_blog_heading')); ?></h2>						
							<div class="title-bottom-icon">
								<span class="title-bottom-border"></span>
							</div> 						
							<p><?php echo  esc_html(get_theme_mod('construction_zone_blog_content')); ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="row inner-section-space-top">
				<?php 
				$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
				if ( $latest_blog_posts->have_posts() ) : 
					while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); 
					?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="inner-news-box-top" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<div class="news-published">
									<p class="news-date">
									<?php echo esc_html( get_the_time('j') ); ?>
									<br> 
									<?php echo esc_html( get_the_date('M') ); ?></p>
									<p class="news-year">
									<?php echo esc_html( get_the_date('Y') ); ?></p>
								</div>		
								<a href="<?php the_permalink() ?>" class="img-responsive"><?php the_post_thumbnail('construction_zone-photo-home'); ?>
								</a>
								<?php endif; ?>
							</div>
							<div class="inner-news-box-bottom">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
								<?php
								if (!empty($construction_zone_btn_blog)) { ?>	
								<a href="<?php the_permalink() ?>" class="btn-read-more"><?php echo esc_html($construction_zone_btn_blog); ?><i class="" aria-hidden="true"></i></a>
								<?php }else{ ?>	
									<a href="<?php the_permalink() ?>" class="btn-read-more"><?php echo esc_html__('Read More','construction-zone'); ?><i class="" aria-hidden="true"></i></a>
								<?php } ?>						
							</div>
						</div>
					<?php
					endwhile; 
				endif; ?>
			</div>
		</div> 
	</div>
<?php } ?>				 
 <!-- News Area End Here -->
