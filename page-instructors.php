<?php

    // template for displaying instructors

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>


    <div class="instructors-page-container">

        <div class="instructors-banner">
            <h1>
                Instructors
                <img src="/wp-content/themes/parkland-theme/images/banner-underline.png" alt="styled brush stroke">
            </h1>
        </div>

    </div>

    <div class="instructors-section">

        <h2>
            Meet Our Instructors 
            <img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke">
        </h2>

        <?php
            $args = array(
                'post_type' => 'parkland-instructors',
                'posts_per_page' => 15,
                'order' => 'ASC',
            );
            $loop = new WP_Query($args);
            $layout1 = '<div class="instructor-container-1">%s</div>';
            $layout2 = '<div class="instructor-container-2">%s</div>';

            if ($loop->have_posts()) {
                $counter = 0;

                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    if ($counter % 2 == 0) {
                        ?>
                        <div class="instructor-container-1">
                            <div class="instructor-image">
                                <?php
                                get_field('instructor_content');
                                ?>
                                    <?php if( get_field('instructor_image') ): ?>
                    <img src="<?php the_field('instructor_image'); ?>" width="580" height="380"  />
                <?php endif; ?>
                            </div>
                            <div class="instructor-information">        
                                <h3><?php the_title(); ?></h3>
                                <h4>Instructor Information</h4>
                                <?php the_field('instructor_content'); ?>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="instructor-container-2">
                            <div class="instructor-image">
                                <?php
                                get_field('instructor_content');
                                ?>
                           <?php if( get_field('instructor_image') ): ?>
                    <img src="<?php the_field('instructor_image'); ?>" width="580" height="380"  />
                <?php endif; ?>
                            </div>
                            <div class="instructor-information">        
                                <h3><?php the_title(); ?></h3>
                                <h4>Instructor Information</h4>
                                <?php the_field('instructor_content'); ?>
                            </div>
                        </div>
                        <?php
                    }
                    $counter++;
                }

            }
        ?>

    </div>

</main>

<?php get_footer(); ?>