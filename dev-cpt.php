<?php
/**
 * Plugin Name:     Dev CPT
 * Plugin URI:      https://anam.rocks
 * Description:     A plugin to demonstrate custom post types and taxonomies.
 * Author:          Anam
 * Author URI:      https://anam.rocks
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     dev-cpt
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         devcpt
 * @author          Anam
 */


// Your code starts here.

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Include the custom post type files.
 */
require_once plugin_dir_path( __FILE__ ) . 'inc/cpt/brew.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/cpt/demo.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/shortcode/brew.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/shortcode/demo.php';
/**
 * Initialize the custom post types.
 */
Breweries::init();
Shortcode_Breweries::init();
Demo::init();
Shortcode_Demo::init();
