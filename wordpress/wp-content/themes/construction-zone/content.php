<?php
/**
 * @package Constrution Zone
 */
$construction_zone_btn_blog = get_theme_mod('construction_zone_btn_blog');	?>
<div class="inner-news-box-top" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
    <?php }else{ ?>	
		<a href="<?php the_permalink() ?>" class="btn-read-more"><?php echo esc_html__('Read More','construction-zone'); ?><i class="" aria-hidden="true"></i></a>
	<?php } ?>
	<?php edit_post_link( esc_html__( 'Edit', 'construction-zone' ), '<span class="edit-link">', '</span>' ); ?>
</div>