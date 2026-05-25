<?php
/**
 * Plugin Name: VP Starter Plugin
 * Description: Minimal starter plugin for VelvetPress deployment.
 * Version:     0.1.0
 * Author:      VelvetPress
 * Author URI:  https://velvetpress.dev
 * License:     GPL-2.0-or-later
 * Requires PHP: 7.4
 * Requires at least: 6.0
 * Text Domain: vp-starter-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VP_STARTER_PLUGIN_VERSION', '0.1.0' );

add_action( 'admin_menu', 'vp_starter_plugin_register_settings_page' );

function vp_starter_plugin_register_settings_page() {
	add_options_page(
		__( 'VP Starter Plugin', 'vp-starter-plugin' ),
		__( 'VP Starter Plugin', 'vp-starter-plugin' ),
		'manage_options',
		'vp-starter-plugin',
		'vp_starter_plugin_render_settings_page'
	);
}

function vp_starter_plugin_render_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'VP Starter Plugin', 'vp-starter-plugin' ); ?></h1>
		<p><?php esc_html_e( 'This is a starter plugin scaffold. Replace this page with your own settings UI.', 'vp-starter-plugin' ); ?></p>
	</div>
	<?php
}
