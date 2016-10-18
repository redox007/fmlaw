<?php get_header(); ?>
<section class="search-details">
    <div class="container">
        <div class="row search-header-texts">
            <div class="col-xs-6 text-left">
                <h5>Search Result</h5>
            </div>
            <div class="col-xs-6 text-right">
                <div class="sort-by">
                    <span>Sory by</span><a href="#"><i class="fa fa-angle-down fa-fw" aria-hidden="true"></i></a> 
                </div>
            </div>
        </div>
        <hr class="row-line">
    </div>
    <div class="container">
        <div class="row">
            <article class="col-md-12 job">
                <div class="bc">
                    <header>
                        <div class="row top">
                            <div class="tags col-md-10 pull-right">
                                <span class="tag">ICT</span>
                                <span class="tag">CONTRACT</span>
                                <span class="tag">QUEENSLAND</span>
                            </div>
                            <div class="date col-md-2 pull-left">May 5, 2016</div>
                            <div class="clearfix"></div>
                        </div>
                        <h2 class="job-title font-capa text-green"><?php the_title(); ?></h2>
                        <p class="sub-title"><?php echo get_post_meta('sub-title', get_the_ID()); ?></p>
                        <p class="contract-text">18 months contract</p>
                    </header>
                    <div class="content row">
                        <div class="col-sm-8">
                            <?php while (have_posts()):the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
get_footer();
