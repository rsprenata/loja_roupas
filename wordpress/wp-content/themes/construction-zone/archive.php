<?php 
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Construction Zone
 */
     
get_header(); 
 if ( get_header_image()){ 	 
	$header_class = "header-bennar-left";
	$overlay = "";
}
else{
	$header_class = "header-bennar-left2";
	$overlay = "overlay2";
}
?>


<div class="header-bennar-area" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
	<div class="overlay <?php echo esc_html($overlay); ?>"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="<?php echo esc_html($header_class); ?>">
					<h1><?php the_archive_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

			<!-- Page News Area Start Here -->
	<div class="page-news-area section-space-b-less-30">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div class="inner-page-news-area" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="row">
						 <?php if(have_posts()) : ?>
						  <?php while(have_posts()) : the_post(); ?>	
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="inner-page-news-box">
									<div class="inner-news-box-top">
										<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
										<div class="news-published">
										<p class="news-date">
										<?php  echo esc_html( get_the_time('j') ); ?>
										<br> 
										<?php  echo esc_html( get_the_date('M') ); ?></p>
										<p class="news-year">
										<?php  echo esc_html( get_the_date('Y') ); ?></p>	
										</div>	
										<a href="<?php the_permalink(); ?>" class="img-responsive"><?php the_post_thumbnail('construction_zone-photo-blog'); ?>
										</a>
										<?php endif; ?>
									</div>
									<div class="inner-news-box-bottom">
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
										<?php if (!empty($construction_zone_btn_blog)) { ?>	
										<a class="btn-read-more" href="<?php the_permalink(); ?>"><?php echo esc_html($construction_zone_btn_blog); ?><i aria-hidden="true"></i></a>
										<?php } ?>
									</div>
								</div>
							</div>
						   <?php endwhile; 
							endif; ?>					
						</div>
							<?php the_posts_pagination(
								array(
								'prev_text' => __('<i class="fa fa-chevron-left"></i>','construction-zone'),
								'next_text' => __('<i class="fa fa-chevron-right"></i>','construction-zone')
								)
							); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>			
	<!-- Page News Area End Here -->

<?php get_footer(); ?>	 