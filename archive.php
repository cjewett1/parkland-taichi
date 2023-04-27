<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parkland-theme
 */

get_header();
?>



	<main id="primary" class="site-main">

	<h2>is this where it happening????</h2>

		<?php if ( have_posts() ) : ?>
            <div>
			<?php
				the_archive_title( '<p class="page-title">', '</p>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
            </div>
			<div">
	
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
	
					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
	
	
					get_template_part( 'template-parts/content', 'blogs' );
	
	
				endwhile;
	
				the_posts_navigation();
	
			else :
	
				get_template_part( 'template-parts/content', 'none' );
	
			endif;
			?>
		</div>
	</main><!-- #main -->

<?php

get_footer();
