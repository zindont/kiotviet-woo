<?php

/**
 * The admin settings class
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
 * Defines the admin settings
 *
 * @package    Kiotviet_Woo
 * @subpackage Kiotviet_Woo/admin
 * @author     Linh Ân <info@zindo.info>
 */
class Kiotviet_Woo_Admin_Settings extends Kiotviet_Woo_Admin {

	function __construct($plugin_name, $version) {
		parent::__construct($plugin_name, $version);
	}	

	public static function output()	{
		$tabs = apply_filters( 'kiotviet_woo_admin_settings_tab', array() );
		include dirname( __FILE__ ) . '/views/html-admin-settings.php';
	}

	public function kiotviet_woo_admin_settings_tab($tabs) {
		$tabs = array(
			'api-settings' => __( 'Cài Đặt API', 'kiotviet-woo' )
		);
		return $tabs;
	}
}
