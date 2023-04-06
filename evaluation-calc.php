<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://webozza.com
 * @since             1.0.0
 * @package           Evaluation_Calc
 *
 * @wordpress-plugin
 * Plugin Name:       Evaluation Calculator
 * Plugin URI:        https://webozza.com
 * Description:       Custom plugin developed by @webozza
 * Version:           7.6.27
 * Author:            Webozza
 * Author URI:        https://webozza.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       evaluation-calc
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
define( 'EVALUATION_CALC_VERSION', '7.6.27' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-evaluation-calc-activator.php
 */
function activate_evaluation_calc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-evaluation-calc-activator.php';
	Evaluation_Calc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-evaluation-calc-deactivator.php
 */
function deactivate_evaluation_calc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-evaluation-calc-deactivator.php';
	Evaluation_Calc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_evaluation_calc' );
register_deactivation_hook( __FILE__, 'deactivate_evaluation_calc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-evaluation-calc.php';

/**
 * Enqueue Scripts
 */
function add_scripts() {
	$plugindir = '/wp-content/plugins/evaluation-calc/';
	wp_enqueue_script('html2pdf', $plugindir . 'public/js/html2canvas.min.js');
	wp_enqueue_script('printjs', $plugindir . 'public/js/print.js');
}
add_action('wp_enqueue_scripts', 'add_scripts');

/**
 * The bit that generates the shortcode
 * this shortcode is for displaying the calculator on any page
 */
function sc_evaluation_calc() {
	$filename = plugin_dir_path( __FILE__ ) . "evaluation-report.pdf"; // You specify the path for the file
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'public/fpdf/fpdf.php');
	include( plugin_dir_path( __FILE__ ) . 'public/fpdf/writeHTML.php');
	include( plugin_dir_path( __FILE__ ) . 'public/partials/evaluation-calc-public-display.php');
	return ob_get_clean();
}
add_shortcode('evaluation_calc','sc_evaluation_calc');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_evaluation_calc() {

	$plugin = new Evaluation_Calc();
	$plugin->run();

}
run_evaluation_calc();
