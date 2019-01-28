<?php // to display site logo on mobile menu ?>

<script>
jQuery('nav#dropdown').meanmenu({
    
	siteLogo: '<?php if (has_custom_logo()) : ?>'+ 
			  '<?php the_custom_logo(); ?>'+
			  '<?php else : ?>'+
			  '<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">'+
			  '<?php bloginfo( 'title' ); ?>'+
			  '</a>'+
			  '<?php endif;?>'

});
</script>


