<?php
/***
* The template for displaying individual blog posts (full article/blog post).
*
* @package parkland-theme
* @since 1.0.0
*/
//display header
get_header();

?>
<div class="single-blog-post-container">
<div class="single-blog-post-banner">
    <div class="single-blog-post-wrap">
        <h1>
            SINGLE BLOG
            <img src="/wp-content/themes/parkland-theme/images/banner-underline.png" alt="styled brush stroke">
        </h1>
        
    </div>
</div>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

        <div class="individual-blog-heading" >
            <div class="single-blog-post-top-box-item">
                <?php the_title('<h2 class="entry-title">',
                    '<img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke">',
                    '</h2>'); ?>
            </div>
        </div>

        <div class="individual-blog-flex-container">

            <div>
                <?php the_field('blog_content'); ?>
            </div>

        </div>
        </article>

        <div class="page-change">
            <div class="previous-page">
            <?php previous_post_link('%link', 'Previous'); ?>
            </div>
            <div class="next-page">
            <?php next_post_link('%link', 'Next'); ?>
            </div>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>