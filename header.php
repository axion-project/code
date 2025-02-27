<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,
                'menu_class' => 'main-menu',
                'fallback_cb' => function() {
                    echo '<a href="#">Home</a>';
                    echo '<a href="#">Services</a>';
                    echo '<a href="#">FAQ</a>';
                    echo '<a href="#">Reviews</a>';
                    echo '<a href="#">Contact</a>';
                    echo '<a href="#">Resources</a>';
                    echo '<a href="#">App</a>';
                }
            ));
            ?>
        </nav>
    </header>
