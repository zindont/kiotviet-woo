<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zindo.info
 * @since             1.0.0
 * @package           Kiotviet_Woo
 *
 * @wordpress-plugin
 * Plugin Name:       KiotViet Woocommerce
 * Plugin URI:        https://zindo.info
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Linh Ân
 * Author URI:        https://zindo.info
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kiotviet-woo
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-kiotviet-woo-activator.php
 */
function activate_kiotviet_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kiotviet-woo-activator.php';
	Kiotviet_Woo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-kiotviet-woo-deactivator.php
 */
function deactivate_kiotviet_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-kiotviet-woo-deactivator.php';
	Kiotviet_Woo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_kiotviet_woo' );
register_deactivation_hook( __FILE__, 'deactivate_kiotviet_woo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-kiotviet-woo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_kiotviet_woo() {

	$plugin = new Kiotviet_Woo();
	$plugin->run();

}
run_kiotviet_woo();
