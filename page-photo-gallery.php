<?php

    // template for displaying all photos

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<main>



    <div class="photo-gallery-banner">
        <h1>
            Photo Gallery
            <img src="/wp-content/themes/parkland-theme/images/banner-underline.png" alt="styled brush stroke">
        </h1>
    </div>



    <div class="photo-gallery-section">
        <h2>
            Photos of Parkland
            <img src="/wp-content/themes/parkland-theme/images/brushstroke.svg" alt="styled brush stroke">
        </h2>
    </div>

    <section>
        <div class="gallery-container">
            <?php
            $loop = new WP_Query($args);
                get_template_part('template-parts/content', 'photos');
            ?>
        </div>
    </section>


</main>

<?php get_footer(); ?>