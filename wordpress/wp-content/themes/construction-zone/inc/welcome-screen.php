<?php
/**
 * Welcome Screen Class
 */
class construction_zone_screen {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'construction_zone_activation_admin_notice' ) );

	}
	
	public function construction_zone_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'construction_zone_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @sfunctionse 1.8.2.4
	 */
	public function construction_zone_admin_notice() {
		?>			
		<div class="updated notice is-dismissible construction-zone-notice">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Thanks for installing  %1$s , You rock!', 'construction-zone'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo sprintf( esc_html__("Welcome! Thank you for choosing Construction Zone WordPress theme. To take full advantage of the features this theme has to offer visit our %1\$s welcome page %2\$s.", "construction-zone"), '<a href="' . esc_url( admin_url( 'themes.php?page=construction_zone_upgrade' ) ) . '">', '</a>' ); ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=construction_zone_upgrade' ) ); ?>" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('Get started with construction zone','construction-zone'); ?></a></p>
		</div>
		<?php
	}
	
}

$GLOBALS['construction_zone_screen'] = new construction_zone_screen();