<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Construction Zone
 */ 
 ?>

<!-- Inner page Header Banner Area Start Here -->
<?php 

get_header(); 
 
?>
	
<!-- Inner page Header Banner Area End Here -->
<!-- Page Error Area Start Here -->
		<div class="page-error-area section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-error-top">
							<span><?php echo esc_html__( '404', 'construction-zone' ); ?></span>
							<p><?php echo esc_html__( 'Sorry Page Was Not Found', 'construction-zone' ); ?></p>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="page-error-bottom">
							<p><?php echo esc_html__( 'The page you are looking is not available or has been removed.', 'construction-zone' ); ?>
							</p>
							<p><?php echo esc_html__( 'Try going to Home Page by using the button below.', 'construction-zone' ); ?>
							</p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-error"><?php echo esc_html__( 'Go To Home Page', 'construction-zone' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- Page Error Area End Here -->

<?php get_footer(); ?>
