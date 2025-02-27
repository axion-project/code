<footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => false,
            'menu_class' => 'footer-menu',
            'fallback_cb' => function() {
                echo '<a href="#">Privacy Policy</a>';
                echo '<a href="#">Terms and Conditions</a>';
            }
        ));
        ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
