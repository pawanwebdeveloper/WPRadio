<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/pawanwebdeveloper/WPRadio
 * @since      1.0.0
 *
 * @package    Wp_Radio
 * @subpackage Wp_Radio/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Radio
 * @subpackage Wp_Radio/admin
 * @author     Yahav Shasha <yahav.shasha@gmail.com>
 */
class Wp_Radio_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		// Add the menu.
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Radio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Radio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-radio-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Radio_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Radio_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-radio-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Adds the menu.
	 *
	 * @since 1.0.0
	 */
	public function add_menu_page() {		

		add_menu_page(
			__( 'Wordpress Radio', 'wp-radio' ),
			__( 'Wordpress Radio', 'wp-radio' ),
			'manage_options',
			'wp-radio',
			array(
				$this,
				'render_admin_callback',
			)
		);
		add_submenu_page( 'wp-radio',__( 'Dashboard', 'wp-radio' ),__( 'Dashboard', 'wp-radio' ), 'manage_options', 'wp-radio');	
		add_submenu_page('wp-radio', __( 'Podcasts', 'wp-radio' ), __( 'Podcasts', 'wp-radio' ), 'manage_options', 'wp-radio' );
		add_submenu_page('wp-radio', __( 'Shortcodes / Widgets', 'wp-radio' ), __( 'Shortcodes / Widgets', 'wp-radio' ), 'manage_options', 'wp-radio' );
	}

	/**
	 * Admin page callback.
	 *
	 * @since 1.0.0
	 */
	public function render_admin_callback() {
		require( plugin_dir_path( __FILE__ ) . 'partials/wp-radio-admin-display.php' );		
	}

	/**
	 * Intro
	 *
	 * @since 1.0.0
	 */
	public function render_intro_partial() {
		require( plugin_dir_path( __FILE__ ) . 'partials/views/intro.php' );
	}

}
