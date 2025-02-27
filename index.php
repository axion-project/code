<?php get_header(); ?>

<main>
    <?php if(is_front_page()): ?>
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo">
            <p><?php echo get_theme_mod('apac_gold_tagline', 'Trust Transparency Performance'); ?></p>
        </div>
        
        <div class="services">
            <?php
            // Define services array - this could be dynamic from WordPress admin
            $services = array(
                array(
                    'title' => 'Ask a Question',
                    'image' => 'question.png',
                    'link' => 'https://apac.app/Q&A'
                ),
                array(
                    'title' => 'Purchase Order',
                    'image' => 'purchase.png',
                    'link' => 'https://apac.app/po'
                ),
                array(
                    'title' => 'Track Order',
                    'image' => 'track.png',
                    'link' => 'https://apac.app/track'
                ),
                array(
                    'title' => 'Information',
                    'image' => 'info.png',
                    'link' => 'https://apac.app/info'
                ),
                array(
                    'title' => 'Solve a Problem',
                    'image' => 'solve.png',
                    'link' => 'https://apac.app/report'
                )
            );
            
            // Loop through services
            foreach($services as $service): ?>
                <div class="service">
                    <a href="<?php echo esc_url($service['link']); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo esc_attr($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
                        <h2><?php echo esc_html($service['title']); ?></h2>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div id="particles-js" class="particles"></div>
    <?php else: ?>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p><?php _e('No content found.', 'apac-gold'); ?></p>
        <?php endif; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
