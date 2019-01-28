
<?php $construction_zone_btn_blog = get_theme_mod('construction_zone_btn_blog');	?>


<div class="inner-news-box-bottom">
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<?php the_excerpt(); ?>
	<?php if (!empty($construction_zone_btn_blog)) { ?>	
	<a class="btn-read-more" href="<?php the_permalink(); ?>"><?php echo esc_html($construction_zone_btn_blog); ?><i aria-hidden="true"></i></a>
    <?php } ?>
	<?php edit_post_link( esc_html__( 'Edit', 'construction-zone' ), '<span class="edit-link">', '</span>' ); ?>
</div>				
							

							
							
							
							
							
							
							
