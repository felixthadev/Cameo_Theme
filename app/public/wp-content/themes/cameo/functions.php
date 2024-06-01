<?php
/**
 * Theme Functions
 * 
 * @package cameo
 */

use CAMEO_THEME\Inc\CAMEO_THEME;

if( ! defined( 'CAMEO_DIR_PATH' ) ) {
    define('CAMEO_DIR_PATH', untrailingslashit( get_template_directory()) );
}

if( ! defined( 'CAMEO_DIR_URI' )) {
    define('CAMEO_DIR_URI', untrailingslashit( get_template_directory_uri()) );
}

require_once CAMEO_DIR_PATH . '/inc/helpers/autoloader.php';

function cameo_get_theme_instance() {
    CAMEO_THEME::get_instance();
}

cameo_get_theme_instance();

function cameo_enqueue_scripts() {

}

add_action('wp_enqueue_scripts', 'cameo_enqueue_scripts');