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
<div class="instructor-container-1">
    <div class="instructor-image">
        <?php
        $image = get_field('instructor_image');
        get_field('instructor_content');
        ?>

        <?php if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['sizes']['instructor-size']); ?>" width="580" height="380" alt="<?php echo esc_attr($image['alt']); ?>">
    </div>
        <?php endif ?>
    <div class="instructor-information">        
        <h3><?php the_title(); ?></h3>
        <h4>Instructor Information</h4>
        <?php the_field('instructor_content'); ?>
    </div>
</div> 
