<?php
$args = array(
    'post_type' => 'slider',
    'post_status' => 'publish'
);
query_posts($args);
//if (have_posts()):
?>
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <?php $i = 0; ?>
        <div class="carousel-inner" role="listbox">
            <?php while (have_posts()) : the_post(); ?>
                <div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
                    <div class="banner-text text-center">
                        <h2 class="title text-white"><?php the_title(); ?></h2>
                        <a class="btn btn-lrn-more btn-lrn-more-white" href="<?php echo get_post_meta(get_the_ID(), '_fmlaw_read'); ?>">Learn More</a>
                    </div>
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/banner-1.jpg" alt="First slide">
                </div>
                <?php
                $i++;
            endwhile;
            ?>
        </div>
        <ol class="carousel-indicators">
            <?php for ($j = 0; $j < $i; $j++) { ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>" class="<?php echo $j == 0 ? 'active' : ''; ?>"></li>
            <?php } ?>
        </ol>
        <!--        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
        <div class="arrow-down text-center text-white">
            <span class="glyphicon glyphicon-menu-down"></span>
        </div>
    </div>
</div>
<?php wp_reset_query(); ?>