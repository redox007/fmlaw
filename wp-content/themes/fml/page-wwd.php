<?php
/*
 * Template Name: What We Do Template
 */
?>
<?php get_header(); ?>
<header class="page-header" <?php if (has_post_thumbnail()) { ?> style="background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>')" <?php } ?> >
    <div class="header-content container">
        <h2 class="text-center font-capa text-uppercase section-heading header-heading"><?php the_title(); ?></h2>
    </div>
</header>
<section id="content" class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center"> 
                <?php while (have_posts()):the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('templates/tpl', 'who-we-are'); ?>
<?php get_template_part('templates/tpl', 'news'); ?>
<?php
get_footer();
