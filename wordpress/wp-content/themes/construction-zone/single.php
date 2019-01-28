<?php
/**
 * The template for displaying all single posts.
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
					<h1><?php wp_title(''); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page News Details Area Start Here -->
<div class="page-news-details-area section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-9">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php if(have_posts()) : ?>
						  <?php while(have_posts()) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
						 <?php endwhile; ?>
						<?php else : ?>
							<p><?php echo esc_html__('No Posts Found', 'construction-zone'); ?></p>
						<?php endif; ?>	
					
					<div class="padinate-page"><?php wp_link_pages(); ?></div> 
					<?php if ( comments_open() || get_comments_number() ) : ?>
					<div class="page-news-details-comments solid-underline">
					<?php comments_template(); ?>
					</div>
					<?php endif; ?> 
					</div>
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
<!-- Page News Details Area End Here -->	
			 
<?php get_footer(); ?>
