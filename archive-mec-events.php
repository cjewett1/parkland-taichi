<?php
/** no direct access **/
defined('MECEXEC') or die();

$main = MEC::getInstance('app.libraries.main');
$settings = $main->get_settings();

$title_tag = (isset($settings['archive_title_tag']) and trim($settings['archive_title_tag'])) ? $settings['archive_title_tag'] : 'h1';

/**
 * The Template for displaying events archives
 * 
 * @author Webnus <info@webnus.net>
 * @package MEC/Templates
 * @version 1.0.0
 */
get_header('mec'); ?>

<div class="class-information">
    <div class="classes-header" >
        <h1>Classes</h1>
    </div>


    
    <div class="class-types">
        <h2>At Parkland we offer 3 different types of classes.</h2>
    
        <div class="class-types-flex-container">
            <div class="beginner">
                <h4>Beginner</h4>
                <p>Learn the fundamentals of Tai Chi. We teach the sequence of the 108 moves in the Tai Chi set. The Tai Chi mindset is almost as important as the motions, its one of the core building blocks in having success, you will learn that here.</p>
            </div>
            <div class="intermediate">
                <h4>Intermediate</h4>
                <p>Solidify your foundational knowledge of Tai Chi with more advanced foot and handwork. Balance and fluidity are priorities as well as building healthy habits to ensure your success. </p>
            </div>
            <div class="advanced">
                <h4>Advanced</h4>
                <p>Our advanced classes are on Saturdays and taught on an individual basis, and vary from student to student. If you are looking to take your Tai Chi a step further, please contact us for more information.</p>
            </div>
        </div>
        <div class="all-levels">
            <h4>All Levels</h4>
                <p>We also offer an all-levels Chi Kung class once a week where various techniques are presented and practiced. Everyone is welcome to join.</p>
        </div>
    </div>
</div>
	
    <section id="<?php echo apply_filters('mec_archive_page_html_id', 'main-content'); ?>" class="<?php echo apply_filters('mec_archive_page_html_class', 'mec-container'); ?>">


        <?php do_action('mec_before_main_content'); ?>

        <?php if(have_posts()): ?>

            <?php do_action('mec_before_events_loop'); ?>

                <?php while(have_posts()): the_post(); ?>

                    <?php if(trim($title)): ?><<?php echo esc_html($title_tag); ?>><?php echo MEC_kses::element($title); ?></<?php echo esc_html($title_tag); ?>><?php endif; ?>

                    <?php the_content(); ?>

                <?php break; /** Only one post should be shown **/ endwhile; // end of the loop. ?>

            <?php do_action('mec_after_events_loop'); ?>

        <?php else: ?>

        <p><?php esc_html_e('No event found!', 'modern-events-calendar-lite'); ?></p>

        <?php endif; ?>
    </section>

    <?php do_action('mec_after_main_content'); ?>

<?php get_footer('mec');