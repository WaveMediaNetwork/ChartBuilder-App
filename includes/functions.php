<?php
    /**
     * Plugin functions
     */

    // Define the function to enqueue styles and scripts
    function plugin_enqueue_scripts() {
        // Enqueue the plugin's stylesheet
        wp_enqueue_style('plugin-styles', plugin_dir_url(__FILE__) . 'assets/css/styles.css');

        // Enqueue the plugin's JavaScript file
        wp_enqueue_script('plugin-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'plugin_enqueue_scripts');

    // Define the function to generate URLs for the homepage menu
    function plugin_generate_menu_urls() {
        // Variables for user-related information
        $user_profile_image_url = 'path-to-profile-image'; // Replace with the actual URL of the user's profile image
        $user_username = 'JohnDoe'; // Replace with the actual username
        $user_type = 'Standard User'; // Replace with the actual user type

        // URLs for menu options
        $account_settings_url = site_url('/account-settings'); // Replace with the actual URL of the account settings page
        $receipts_url = site_url('/receipts'); // Replace with the actual URL of the receipts page
        $library_url = site_url('/library'); // Replace with the actual URL of the library page
        $my_charts_url = site_url('/library/my-charts'); // Replace with the actual URL of the "My Charts" page
        $organization_management_url = site_url('/organization-management'); // Replace with the actual URL of the organization management page
        $logout_url = wp_logout_url(); // Generate the logout URL

        // Check if the user is an administrator
        $is_admin = current_user_can('administrator');

        // Return the generated URLs and other variables as an array
        return array(
            'user_profile_image_url' => $user_profile_image_url,
            'user_username' => $user_username,
            'user_type' => $user_type,
            'account_settings_url' => $account_settings_url,
            'receipts_url' => $receipts_url,
            'library_url' => $library_url,
            'my_charts_url' => $my_charts_url,
            'organization_management_url' => $organization_management_url,
            'logout_url' => $logout_url,
            'is_admin' => $is_admin,
        );
    }
