<?php
/**
 * The default shortcode runtime configuration parameters
 *
 * @package     NickDavis\Custom
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\Shortcodes;

return array(
	/**
	 * Shortcode name, the name within the square brackets [faq]
	 */
	'shortcode_name'              => '',

	/**
	 * Specify if you want do_shortcode() to run on the content betweeen the
	 * shortcode opening and closing brackets. Defaults to true.
	 */
	'do_shortcode_within_content' => true,

	/**
	 * Specify the processing function when you want your code to handle the
	 * output buffer, view and processing. Defaults to null.
	 */
	'processing_function'         => 'null',

	/**
	 * The absolute path to the view file. If more than one, use an array of
	 * view files.
	 */
	'view'                        => '',

	/**
	 * Defined shortcode default attributes. Each is overridable by the author.
	 */
	'defaults'                    => array(),
);
