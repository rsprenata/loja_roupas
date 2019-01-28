<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<div class="page-news-area section-space-b-less-30">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="inner-page-news-area">
					<div class="row">
						<?php if(have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="inner-page-news-box">
									<?php get_template_part('content');?>
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
<?php get_footer(); ?>