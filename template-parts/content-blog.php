<?php
/**
 * Template part for creating the project which display on the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parkland-theme
 */

?>

<!-- What goes inside the loop is up to us. Use markup around the content -->
<div class="blog-flex-item">
    <div class="blog-post-content blog-post-flex-left">
      <?php
        $image = get_field('blog_image');
      ?>
      <?php if( !empty( $image ) ): ?>
        <a href="<?php the_permalink(); ?> "><img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="blog-img"></a>
      <?php endif ?>
    </div>

    <div class="blog-post-content blog-post-flex-right">
      <div class="blog-post-single-title">
        <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
      </div>
      <div class="post-content-excerpt">
          <?php the_excerpt(''); ?>
      </div>
      <a class="blog-post-btn" href="<?php the_permalink(); ?>">Read More</a>
    </div>
</div>

