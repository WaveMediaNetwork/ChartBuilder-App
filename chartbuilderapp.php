<?php
/*
Plugin Name: OpenAgenda Events
Description: Custom Professional Chart Builder.
Version: 1.0
Author: <a href="https://wavemedianetwork.com">Wave Media Network</a>
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants
define( 'CHART_BUILDER_APP', '1.0' );
define( 'CHART_BUILDER_APP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CHART_BUILDER_APP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include plugin files
include( CHART_BUILDER_APP_PLUGIN_PATH . 'includes/class-events-list.php' );
include( CHART_BUILDER_APP_PLUGIN_PATH . 'includes/class-edit-event.php' );
include( CHART_BUILDER_APP_PLUGIN_PATH . 'includes/frontend.php' );
include( CHART_BUILDER_APP_PLUGIN_PATH . 'includes/functions.php' );


// Register activation and deactivation hooks
register_activation_hook( __FILE__, 'customoa_activate' );
register_deactivation_hook( __FILE__, 'customoa_deactivate' );


/**
 * Initializes the CustomOA plugin.
 */
function customoa_init() {
    // Register the CustomOA shortcode
    add_shortcode( 'customoa', 'customoa_shortcode' );
}
add_action( 'init', 'customoa_init' );

/**
 * Activates the CustomOA plugin.
 */
function customoa_activate() {
    // No activation tasks required
}

/**
 * Deactivates the CustomOA plugin.
 */
function customoa_deactivate() {
    // No deactivation tasks required
}


function enqueue_plugin_styles() {
    wp_enqueue_style('cba_style_css', plugin_dir_url(__FILE__) . 'assets/css/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_plugin_styles');