<?php
/*
 * Template Name: What We Do Template
 */
?>
<?php get_header(); ?>
<?php get_template_part('templates/tpl', 'static-banner'); ?>
<?php if (have_posts()): the_post(); ?>
    <div class="section-pd">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part('templates/tpl', 'who-we-are'); ?>
<?php get_template_part('templates/tpl', 'newslatter'); ?>
<?php get_template_part('templates/tpl', 'news'); ?>
<?php get_template_part('templates/tpl', 'contact'); ?>
<?php get_footer(); ?>