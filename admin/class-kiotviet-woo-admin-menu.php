<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://zindo.info
 * @since      1.0.0
 *
 * @package    Kiotviet_Woo
 * @subpackage Kiotviet_Woo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the admin menu
 *
 * @package    Kiotviet_Woo
 * @subpackage Kiotviet_Woo/admin
 * @author     Linh Ân <info@zindo.info>
 */
class Kiotviet_Woo_Admin_Menu extends Kiotviet_Woo_Admin {

	function __construct($plugin_name, $version) {
		parent::__construct($plugin_name, $version);
	}

	/**
	 * Register admin menu
	 *
	 * @since    1.0.0
	 */
	public function kiotviet_woo_admin_menu() {
	    add_menu_page(
	        __( 'KiotViet Woo', 'kiotviet-woo' ),
	        __( 'KiotViet Woo', 'kiotviet-woo' ),
	        'manage_options',
	        'kiotviet-woo',
	        null,
	        'dashicons-store',
	        56.5
	    );

	    $settings_page = add_submenu_page( 'kiotviet-woo',
	    	__( 'Cài đặt', 'kiotviet-woo' ),
	    	__( 'Cài đặt', 'kiotviet-woo' ),
	    	'manage_options', 
	    	'kiotviet-woo-settings',
	    	array( $this, 'kiotviet_woo_admin_settings_page' )
	    );
	}

	/**
	 * Init the settings page.
	 */
	public function kiotviet_woo_admin_settings_page() {
		echo "<h1>OUTPUT SETTINGPAGE</h1>";
	}	

}
