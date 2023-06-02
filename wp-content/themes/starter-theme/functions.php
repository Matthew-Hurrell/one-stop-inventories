<?php 

    // Enqueue custom scripts
    function wp_enqueue_custom_files() {

        // Custom Styles
        wp_enqueue_style('onestopinventories_main_styles', get_theme_file_uri('output.css'));
    }

    add_action('wp_enqueue_scripts', 'wp_enqueue_custom_files');