<?php
/*
 * Template Name: Job Seeker Template
 */
?>
<?php get_header('job-seeker'); ?>

<?php get_template_part('templates/tpl', 'search-job-form'); ?>

<?php if (have_posts()): ?>
    <section class="text-center no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php while (have_posts()):the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('templates/tpl', 'what-we-do'); ?>
<?php get_template_part('templates/tpl', 'who-we-are'); ?>
<?php get_template_part('templates/tpl', 'news'); ?>

<?php get_footer(); ?>