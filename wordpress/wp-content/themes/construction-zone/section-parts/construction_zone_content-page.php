<?php if(have_posts()) : 
	 while(have_posts()) : the_post();  
	 if(get_the_content()!= "")
	 {?>
		<div class="section-space">
			<div class="container">
				<div class="row">
						<?php the_content(); ?> 
				</div>
			</div> 
		</div> 
	 <?php } 
endwhile; ?>
<?php endif; ?>	

