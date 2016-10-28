<?php
$type = 'service';
$thePosts = query_posts("post_type=" . $type . "&showposts=" . $limit . "&post_status=publish&order=ASC");
$pid = get_the_ID();
global $wp_query;
?>
<?php if (have_posts()): ?>
    <div class="section-pd relataed-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="box-heading text-center text-uppercase section-bm">RELATED AREAS OF PRACTICE</h2>
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <?php
                                    $i = 1;
                                    while (have_posts()):the_post();
                                        if ($pid == get_the_ID())
                                            continue;
                                        ?>
                                        <div class="col-sm-3 section-p service-item text-center" onclick="window.location.href = '<?php the_permalink(); ?>'" id="<?php echo "SVID-" . get_the_ID(); ?>" >
                                            <?php the_post_thumbnail('service', array('class' => 'img-responsive')); ?>
                                            <p><?php the_title(); ?></p>
                                        </div>
                                        <?php
                                        if ($i % 4 == 0 && $wp_query->found_posts > $i) {
                                            ?>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <?php
                                        }
                                        $i++;
                                    endwhile;
                                    ?>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    wp_reset_query();
endif;
?>