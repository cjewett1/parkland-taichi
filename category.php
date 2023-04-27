<?php
/**
 * The template to display archive pages for category types
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
 * 
 * @package parkland-theme
 */

?>

<?php get_header(); ?>

<?php the_archive_title(); ?>

            <div class="all-blogs-flex-container">
                <?php
                    $args = array(
                        'post_type'      => 'blogs',
                        'posts_per_page' => 15,
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'blogs');
                    }?>
            </div>
<?php get_footer(); ?>