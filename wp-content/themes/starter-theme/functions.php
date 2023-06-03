<?php 

    // Enqueue custom scripts
    function wp_enqueue_custom_files() {

        // Custom Styles
        wp_enqueue_style('onestopinventories_main_styles', get_theme_file_uri('output.css'));
    }

    add_action('wp_enqueue_scripts', 'wp_enqueue_custom_files');


// Add custom block category
function register_custom_category( $categories ) {

    $categories[] = array(
        'slug'  => 'custom-category',
        'title' => 'Custom'
    );

    return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
    add_filter( 'block_categories_all', 'register_custom_category' );
} else {
    add_filter( 'block_categories', 'register_custom_category' );
}