<?php query_posts("post_type=news&showposts=3&post_status=publish"); ?>
<?php if (have_posts()) : ?>
    <div class="container">
        <hr class="line nomt nombt">
    </div>
<section id="news" class="no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading font-capa text-green">NEWS UPDATES BLOG</h2>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">

                <?php while (have_posts()):the_post(); ?>
                    <div class="col-sm-4 news-item-small">
                        <?php the_post_thumbnail('news', array('class' => 'img-responsive')) ?>
                        <div class="content-news-small">
                            <h4 class="blog-title"><?php the_title(); ?></h4>
                            <?php the_content(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-lrn-more">Read More</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <!--<div class="gap"></div>-->
<?php endif; ?>