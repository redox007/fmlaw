<div class="banner static page-header section-pd" <?php if (has_post_thumbnail()) { ?> style="background-image: url('<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full'); ?>')" <?php } ?>>
    <h2 class="title text-center text-white section-m"><?php the_subtitle(); ?></h2>
    <div class="arrow-down text-center text-white">
        <span class="glyphicon glyphicon-menu-down"></span>
    </div>
</div>
