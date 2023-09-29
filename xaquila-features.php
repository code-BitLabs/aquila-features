<?php
/**
 * Aquila Features Plugin
 *
 * @package aquila-features
 * @author  Tanzim Hossain
 *
 * @wordpress-plugin
 *
 * Plugin Name:       XAquila Features
 * Plugin URI:        https://github.com/code-BitLabs/aquila-features
 * Description:       Adds Gutenberg Blocks for Features
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.2
 * Author:            Tanzim Hossain
 * Author URI:        https://www.twitter.com/kdp_tanzim
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       xaquila-features
 * Domain Path:       /languages
 */


require_once 'vendor/autoload.php';

use AquilaFeatures\Plugin;

if ( class_exists( 'AquilaFeatures\Plugin' ) ) {
	$the_plugin = new Plugin();


}

// register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );

// register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );
