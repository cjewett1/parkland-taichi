<?php
    // registration page

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<article  class="registration" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="registration-heading">
        <h1>Registration</h1>
    </div>

	<?php parkland_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'parkland-theme' ),
				'after'  => '</div>',
			)
		);
		?>
		<section class="form-details">
		<div class="disclaimer">
		<p>We accept E-Transfers, cash or cheque. Due to associated fees we do not accept credit cards at this time. Sorry for the inconvenience.</p>
		<p>Payment to be made via E-Transfer or in-person prior to your first class at Parkland Tai Chi.</p>
		<p>E-Transfer link – parklandtaichi@email.com</p>
		<p><strong>  **We require you to fill out a liability form which is signed with one of our staff present as a witness. </strong></p>
		</div>
		<div class="liability-form">
		<p>You can download the Liability form here and sign it while at Parkland.</p>
		<?php 
		$link = get_field('liability_form');
		if( $link ): ?>
			<a class="pdf-link" href="<?php echo esc_url( $link ); ?>" target="_blank" >Link to Liability Form</a>
		<?php endif; ?>
		</div>
		<div class="membership-fees-form">
		<p>Here are our membership prices. This varies from year to year.</p>
		<?php 
		$link = get_field('membership_fees');
		if( $link ): ?>
		<a class="pdf-link" href="<?php echo esc_url( $link ); ?>" target="_blank" >Link to our Membership Fees</a>
		<?php endif; ?>
		</div>
		<div class="registration-form">
		<p>If you wish to fill out the registration form manually, please follow the link below.</p>
		<?php 
		$link = get_field('registration_form');
		if( $link ): ?>
		<a class="pdf-link" href="<?php echo esc_url( $link ); ?>" target="_blank" >Link to Registration Form</a>
		<?php endif; ?>
		</div>
		</section>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'parkland-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->


<?php get_footer(); ?>