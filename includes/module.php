<?php
/**
 * Custom module handler - bootstrap file for the module
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Shortcodes;

define( 'CUSTOM_MODULE_DIR', __DIR__ );

function autoload() {
	$files = array(
		'shortcode.php',
	);

	foreach ($files as $file ) {
		include __DIR__ . '/' . $file;
	}
}

autoload();

/**
 * Register a plugin with the Custom Module.
 *
 * Handles
 *
 * @since 1.0.0
 *
 * @param $plugin_file
 */
function register_plugin( $plugin_file ) {
	register_activation_hook( $plugin_file, __NAMESPACE__ . '\delete_rewrite_rules_on_plugin_status_change' );
	register_deactivation_hook( $plugin_file, __NAMESPACE__ .  '\delete_rewrite_rules_on_plugin_status_change' );
	register_uninstall_hook( $plugin_file, __NAMESPACE__ .  '\delete_rewrite_rules_on_plugin_status_change' );
}

/**
 * Delete the rewrite rules on plugin status change, i.e.
 * activation, deactivation or uninstall.
 *
 * @since 1.0.0
 *
 * @return void
 */
function delete_rewrite_rules_on_plugin_status_change() {
	delete_option( 'rewrite_rules' );
}
