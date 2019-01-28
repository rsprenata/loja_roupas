<?php
$construction_zone_i_section = get_theme_mod("construction_zone_image_section_hideshow",'hide');
$construction_zone_image_more = get_theme_mod("construction_zone_image_more",'');
$construction_zone_image_contact = get_theme_mod("construction_zone_image_contact",'');	
$construction_zone_b_image = get_theme_mod("construction_zone_b_image",'');	
$construction_zone_image_heading = get_theme_mod("construction_zone_image_heading",'');

if( $construction_zone_i_section == "show") :
?>
<!-- Image Area Start Here -->
	<div class="slider-area" >
		<div class="overlay"></div>
		<div class="preview-1 img-responsive" style="background: url('<?php echo esc_url($construction_zone_b_image); ?>') no-repeat center center; ">
			<!-- Direction 1 -->
				<div class="nivo-caption" style="display: block;">
				<div class="slider-content t-cn s-tb slider-1">
					<div class="title-container s-tb-c title-compress">
						<?php if ($construction_zone_image_heading !=""){ ?>
							<h1 class="title1">
								<?php echo esc_html($construction_zone_image_heading); ?>
							</h1>
						<?php } ?>
						<div class="details-content">
							<p><?php echo esc_html(get_theme_mod('construction_zone_image_subheading')); ?>	</p>							
						</div>
						<div class="read-more">
							<ul>
								<?php if (!empty($construction_zone_image_more)) { ?>
									<li><a href="<?php echo esc_url(get_theme_mod('construction_zone_image_more_url')); ?>">
									<?php echo esc_html($construction_zone_image_more); ?>
									</a></li>
								<?php }
								if (!empty($construction_zone_image_contact)) { ?>	
									<li><a href="<?php echo esc_url(get_theme_mod('construction_zone_image_contact_url')); ?>">
									<?php echo esc_html($construction_zone_image_contact); ?>
									</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>	
				</div> 
			</div>
		</div>
	</div>
	<!-- Image Area End Here -->		
	<?php
	endif;
?>