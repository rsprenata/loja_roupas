<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Construction_Zone_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/upgrade/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Construction_Zone_Customize_Section_Pro' );

		// doc sections.
		$manager->add_section(
			new Construction_Zone_Customize_Section_Pro(
				$manager,
				'construction_zone',
				array(
					'title'    => esc_html__( 'Theme Documentation', 'construction-zone' ),
					'pro_text' => esc_html__( 'Click Here', 'construction-zone' ),
					'pro_url'  => 'http://dazzlersoftware.com/doc/construction-zone-doc/index.html',
					'priority'  => 1
				)
			)
		);
		// upgrade sections.
		$manager->add_section(
			new Construction_Zone_Customize_Section_Pro(
				$manager,
				'upgrade-pro',
				array(
					'title'    => esc_html__( 'Upgrade To Pro', 'construction-zone'),
					'pro_text' => esc_html__( 'View Pro', 'construction-zone' ),
					'pro_url'  => 'http://dazzlersoftware.com/themes/construction-zone-pro/',
					'priority'  => 2
				)
			)
		);
	}


	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'construction-zone-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upgrade/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'construction-zone-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/upgrade/customize-controls.css' );
	}
}

// Doing this customizer thang!
Construction_Zone_Customize::get_instance();
