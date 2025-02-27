<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<main>
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <div class="entry-meta">
                    <?php
                    echo sprintf(
                        esc_html__('Posted on %s', 'apac-gold'),
                        '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
                    );
                    ?>
                </div>
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

            <footer class="entry-footer">
                <?php
                // Display categories and tags
                if (has_category() || has_tag()) {
                    echo '<div class="entry-taxonomy">';
                    
                    if (has_category()) {
                        echo '<span class="cat-links">';
                        echo esc_html__('Categories: ', 'apac-gold') . get_the_category_list(', ');
                        echo '</span>';
                    }
                    
                    if (has_tag()) {
                        echo '<span class="tag-links">';
                        echo esc_html__('Tags: ', 'apac-gold') . get_the_tag_list('', ', ');
                        echo '</span>';
                    }
                    
                    echo '</div>';
                }
                ?>
            </footer>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        
        // Previous/next post navigation.
        the_post_navigation(
            array(
                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'apac-gold') . '</span> <span class="nav-title">%title</span>',
                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'apac-gold') . '</span> <span class="nav-title">%title</span>',
            )
        );
    endwhile;
    ?>
</main>

<?php
get_footer();
