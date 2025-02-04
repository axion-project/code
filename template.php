<?php
/*
Template Name: NextJS App Launcher
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="nextjs-app"></div>

    <script>
        (function() {
            var script = document.createElement('script');
            script.src = "https://your-nextjs-domain.com/_next/static/chunks/main.js"; // Adjust this
            script.async = true;
            document.body.appendChild(script);
        })();
    </script>

    <?php wp_footer(); ?>
</body>
</html>