<?php get_header(); ?>
<?php
$url = false;
if (class_exists('MultiPostThumbnails')) :
    $url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image-service', get_the_ID(), 'full');
endif;
?>
<div class="banner static page-header section-pd" <?php if ($url) { ?> style="background-image: url('<?php echo $url; ?>')" <?php } ?>>
    <h2 class="title text-center text-white section-m"><?php the_subtitle(); ?></h2>
    <div class="arrow-down text-center text-white">
        <span class="glyphicon glyphicon-menu-down"></span>
    </div>
</div>

<div class="section-pd">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if (have_posts()): the_post(); ?>
                    <h2 class="box-heading text-center"><?php the_title(); ?></h2>
                    <div class="section-m squize-text">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('templates/tpl', 'related-services'); ?>
<?php query_posts("post_type=article&showposts=3&post_status=publish"); ?>
<?php if (have_posts()) : ?>
    <div class="section-pd whats-new">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="box-heading text-center text-white section-bm text-uppercase">Related Articles</h2>
                    <div class="row">
                        <?php while (have_posts()):the_post(); ?>
                            <div class="col-sm-4">
                                <?php the_post_thumbnail('article', array('class' => 'img-responsive')) ?>
                                <div class="section-m">
                                    <h3 class="news-heading"><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-lrn-more btn-lrn-more-white" href="<?php the_permalink(); ?>">Learn More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_template_part('templates/tpl', 'newslatter'); ?>
<?php get_template_part('templates/tpl', 'contact'); ?>
<?php get_footer(); ?>

