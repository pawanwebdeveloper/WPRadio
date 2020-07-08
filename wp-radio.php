<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/pawanwebdeveloper/WPRadio
 * @since             1.0.0
 * @package           Wp_Radio
 *
 * @wordpress-plugin
 * Plugin Name:       WP Radio
 * Plugin URI:        https://github.com/pawanwebdeveloper/WPRadio
 * Description:       Wordpress radio plugin to show all data.
 * Version:           1.0.0
 * Author:            Yahav Shasha
 * Author URI:        https://github.com/pawanwebdeveloper/WPRadio
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-radio
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WP_RADIO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-radio-activator.php
 */
function activate_wp_radio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-radio-activator.php';
	Wp_Radio_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-radio-deactivator.php
 */
function deactivate_wp_radio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-radio-deactivator.php';
	Wp_Radio_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_radio' );
register_deactivation_hook( __FILE__, 'deactivate_wp_radio' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-radio.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_radio() {

	$plugin = new Wp_Radio();
	$plugin->run();

}
run_wp_radio();
