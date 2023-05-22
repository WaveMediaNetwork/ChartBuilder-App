<?php
/**
 * Main Plugin File
 */

    // Enqueue the plugin's stylesheet
    function enqueue_plugin_styles() {
        wp_enqueue_style('plugin-styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css');
    }
    add_action('wp_enqueue_scripts', 'enqueue_plugin_styles');

    // Include the plugin's functions
    require_once plugin_dir_path(__FILE__) . 'includes/functions.php';
