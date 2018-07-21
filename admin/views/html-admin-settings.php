<?php

/**
 * Provide a admin settings for the plugin
 *
 *
 * @link       https://zindo.info
 * @since      1.0.0
 *
 * @package    Kiotviet_Woo
 * @subpackage Kiotviet_Woo/admin/views
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current_tab = '';

?>

<div class="wrap woocommerce">
	<form method="POST" id="mainform" action="" enctype="multipart/form-data">
		<nav class="nav-tab-wrapper woo-nav-tab-wrapper">
			<?php

			foreach ( $tabs as $slug => $label ) {
				echo '<a href="' . esc_html( admin_url( 'admin.php?page=kiotviet-woo-settings&tab=' . esc_attr( $slug ) ) ) . '" class="nav-tab ' . ( $current_tab === $slug ? 'nav-tab-active' : '' ) . '">' . esc_html( $label ) . '</a>';
			}

			?>
		</nav>
	</form>
</div>