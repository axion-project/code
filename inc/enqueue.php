<?php
/**
 * Enqueue scripts and styles.
 */
function apac_gold_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('apac-gold-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('apac-gold-fonts', 'https://fonts.googleapis.com/css2?family=Arial+Rounded+MT:wght@400', array(), null);
    
    // Enqueue particles.js
    wp_enqueue_script('particles-js', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array(), '2.0.0', true);
    
    // Enqueue custom scripts
    wp_enqueue_script('apac-gold-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'particles-js'), '1.0.0', true);
    
    // Localize script with theme colors
    wp_localize_script('apac-gold-scripts', 'apacGoldSettings', array(
        'backgroundColor' => get_theme_mod('apac_gold_background_color', '#01a4d5')
    ));
}
add_action('wp_enqueue_scripts', 'apac_gold_scripts');
