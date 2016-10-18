<?php
/*
 * Template Name: Employer page Template
 */
?>
<?php get_header('employer'); ?>
<header id="employer">
    <div id="employe" class="header-content container">
        <h2 class="text-center font-capa text-green section-heading"><?php the_subtitle(); ?></h2>
        <a href="#" data-toggle="collapse" data-target="#contact" class="btn btn-lrn-more btn-large">Contact Us</a>
    </div>
</header>
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