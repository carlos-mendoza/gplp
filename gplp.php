<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://onlinevortex.com
 * @since             1.0.0
 * @package           Gplp
 *
 * @wordpress-plugin
 * Plugin Name:       Going Public Landing pages
 * Plugin URI:        http://localhost
 * Description:       Short description of what the plugin does
 * Version:           1.0.0
 * Author:            Carlos Mendoza
 * Author URI:        http://onlinevortex.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gplp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gplp-activator.php
 */
function activate_gplp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gplp-activator.php';
	Gplp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gplp-deactivator.php
 */
function deactivate_gplp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gplp-deactivator.php';
	Gplp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gplp' );
register_deactivation_hook( __FILE__, 'deactivate_gplp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gplp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gplp() {

	define( 'ACF_LITE' , true ); // hides the ACF menu in the backend
	// include ACF
	include_once plugin_dir_path( __FILE__ ) . 'includes/advanced-custom-fields/acf.php';

	$plugin = new Gplp();
	$plugin->run();

}
run_gplp();
