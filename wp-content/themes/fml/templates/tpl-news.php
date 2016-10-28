<?php query_posts("post_type=article&showposts=3&post_status=publish"); ?>
<?php if (have_posts()) : ?>
    <div class="section-pd whats-new">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="box-heading text-center text-white section-bm">What's News</h2>
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