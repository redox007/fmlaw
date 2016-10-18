<?php get_header(); ?>
<?php if (has_post_thumbnail()) { ?>
    <header class="page-header" <?php if (has_post_thumbnail()) { ?> style="background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>')" <?php } ?> >
        <div class="header-content container">
            <h2 class="default-page-header-title text-center font-capa text-uppercase section-heading header-heading"><?php the_title(); ?></h2>
        </div>
    </header>
<?php } ?>
<section id="content">  
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (!has_post_thumbnail()) { ?>
                    <h2 class="default-page-title text-left font-capa text-uppercase text-green"><?php the_title(); ?></h2>
                <?php } ?>
                <?php while (have_posts()):the_post(); ?>    
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
