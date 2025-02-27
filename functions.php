<?php
/**
 * APAC-Gold Theme functions and definitions
 */

// Theme setup
function apac_gold_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => esc_html__('Primary Menu', 'apac-gold'),
        'footer-menu' => esc_html__('Footer Menu', 'apac-gold'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for Custom Logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'apac_gold_setup');

// Register widget area
function apac_gold_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'apac-gold'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'apac-gold'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'apac_gold_widgets_init');

// Customizer additions
function apac_gold_customize_register($wp_customize) {
    // Add a setting for the tagline
    $wp_customize->add_setting('apac_gold_tagline', array(
        'default' => 'Trust Transparency Performance',
        'transport' => 'refresh',
    ));
    
    // Add a control for the tagline
    $wp_customize->add_control('apac_gold_tagline', array(
        'label' => __('Tagline', 'apac-gold'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
    
    // Add a setting for the background color
    $wp_customize->add_setting('apac_gold_background_color', array(
        'default' => '#01a4d5',
        'transport' => 'refresh',
    ));
    
    // Add a control for the background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'apac_gold_background_color', array(
        'label' => __('Background Color', 'apac-gold'),
        'section' => 'colors',
    )));
}
add_action('customize_register', 'apac_gold_customize_register');
