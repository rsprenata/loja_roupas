<?php
/*
 * The template for displaying search
 *
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
					<?php if ( have_posts() ) : ?>
					   <h2>
						 <?php printf( esc_html__( 'Search Results : %s', 'construction-zone' ), '<span>' . get_search_query() . '</span>' ); ?>
					   </h2>
					<?php else : ?>
						<h1 class="page-title"><?php echo esc_html__( 'Nothing Found', 'construction-zone' ); ?></h1>
				   <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
	
<div class="page-news-details-area section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="row">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-news-details-content">
                              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								 <?php get_template_part( 'content', 'search' ); ?>
							  </div> 
						</div>
			         </div>
				<?php endwhile; ?>
				<?php the_posts_pagination(
					array(
					'prev_text' => __('<i class="fa fa-chevron-left"></i>','construction-zone'),
					'next_text' => __('<i class="fa fa-chevron-right"></i>','construction-zone')
					)
				); ?>
				<?php else : ?>
					<p><?php echo esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'construction-zone' ); ?></p>
					<div class="widget widget_search cc-search">
			            <?php get_search_form(); ?>
				    </div>
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

<?php get_footer(); ?>		