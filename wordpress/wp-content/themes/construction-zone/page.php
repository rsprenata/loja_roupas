<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Construction Zone
 */
 
get_header();

if ( get_header_image() ){ 	 
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
	
<!-- Inner page Header Banner Area End Here -->
<div class="page-news-details-area section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="page-about-us-left">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<div class="main_page_thumb">
							<?php the_post_thumbnail(''); ?>
						</div>
						<?php the_content(); ?>
						
						<?php comments_template( '', true ); ?>
				<?php endwhile; ?>
				<?php endif; ?>	
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
<?php 
get_footer();
 ?>
