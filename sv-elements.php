<?php 
/**
 *Plugin Name: Lottovibe Core
 * Description: Theme core addon pluign.
 * Version:     1.0.0
 * Text Domain: lottovibe-core
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define( 'SVELEMENTS_FILE', __FILE__ );
define( 'SVELEMENTS_DIR_PATH_PRO', plugin_dir_path( __FILE__ ) );
define( 'SVELEMENTS_DIR_URL_PRO', plugin_dir_url( __FILE__ ) );
define( 'SVELEMENTS_ASSETS_PRO', trailingslashit( SVELEMENTS_DIR_URL_PRO . 'assets' ) );

require SVELEMENTS_DIR_PATH_PRO . 'base.php';
require SVELEMENTS_DIR_PATH_PRO . 'post-type/post-type.php';
require SVELEMENTS_DIR_PATH_PRO . 'shortcode-elementor/elementor-shortcode.php';
require SVELEMENTS_DIR_PATH_PRO . 'inc/custom-rt-icon.php';
require SVELEMENTS_DIR_PATH_PRO . 'widget-option/admin-init.php';
require SVELEMENTS_DIR_PATH_PRO . 'svtheme-header-footer-elementor/svtheme-header-footer-elementor.php';