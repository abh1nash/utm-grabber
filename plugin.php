<?php
/**
 * Plugin Name:       UTM Grabber
 * Plugin URI:        https://abhinash.net/
 * Description:       Add UTM parameters to links
 * Version:           0.0.0.1
 * Requires at least: 5.3
 * Author:            Abhinash Khatiwada
 * Author URI:        https://abhinash.net/
 * Text Domain:       abhninash-utm-grabber
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/abh1nash/utm-grabber
 */

if ( !defined( 'ABSPATH' ) ) exit;

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

define('ABHINASH_UTM_PLUGIN_URL', plugin_dir_url(__FILE__));

use Abhinash\UtmGrabber\Core;

// Enable during development
define('UTM_PLUGIN_DEV_MODE', false);

$init = new Core();