<div class="page-news-details-content solid-underline" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<a href="<?php the_permalink(); ?>" class="img-responsive"><?php the_post_thumbnail('construction_zone-photo-home'); ?>
		</a>
	 <?php endif; ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<ul class="comments-info solid-underline">
		<li><i class="fa fa-calendar" aria-hidden="true"></i><?php the_time('F j, Y'); ?></li>
		<li><i class="fa fa-user" aria-hidden="true"></i><?php echo esc_html__('Posted By', 'construction-zone' ); ?> <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="">
		<?php the_author(); ?>
		</a>
		</li>
		<?php if ( get_comments_number()>0 ) : ?>
		<li><i class="fa fa-comments-o" aria-hidden="true"></i>
		<?php printf( esc_html( _n( '<span>%1$s</span> Comment', '<span>%1$s</span> Comments', get_comments_number(), 'construction-zone' )),
			number_format_i18n( get_comments_number() ) );
		?>
		</li>
		<?php endif;?>
	</ul>
	<?php the_content(); ?>
</div> 
<?php if (has_category()) : ?>
<div class="page-news-details-tags solid-underline">
	<span class="inner-sub-title"><?php echo esc_html__('Category', 'construction-zone' ); ?></span>
	<ul>
	   <li><?php the_category(',</li> <li>'); ?></li>
	</ul>
</div>
<?php endif; ?>	
<?php if (has_tag()) : ?>
<div class="page-news-details-tags solid-underline">
	<span class="inner-sub-title"><?php echo esc_html__('Tags', 'construction-zone' ); ?></span>
	<ul>
	   <li><?php the_tags(',</li> <li>'); ?></li>
	</ul>
</div>			
<?php endif; ?>			
							
						
