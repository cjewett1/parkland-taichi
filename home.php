<?php
/***
* The template for displaying all blog posts.
*
* @clinton-gorda-theme
* @since 1.0.0
*/
//display header
get_header();
?>

<article <?php post_class();?> id="post-<?php the_ID();?>">

    <div class="flex-container">
        <div class="blog-posts">
            <?php if(have_posts()) : ?>
            <!-- start the loop | the loop grabs all the content and cycles through all of the content until it’s done. -->
                <?php while(have_posts()) : the_post(); ?>
                <!-- display the all of the blog posts -->
                    <?php get_template_part('template-parts/content', 'home'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    <!-- //On this page specifically - this would be area to add pagination and a sidebar - out of the loop. -->
</article>



</div>

    <!-- //display footer -->

<?php get_footer(); ?>
