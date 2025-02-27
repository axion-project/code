<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main>
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header>

            <div class="entry-content">
                <?php
                the_content();
                
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'apac-gold'),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
