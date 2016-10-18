<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 prd">
                <div id="error404" class="clearfix">
                    <div class="error404-mess thumbnail">
                        <img src="<?php echo get_bloginfo('template_url') ?>/img/404.jpg" class="img-responsive" alt=""> 
                        <?php //get_search_form(); /* outputs the default Wordpress search form */ ?>
                    </div>
                </div><!--#error404 .post-->
                <div class="back-to-home text-center">
                    <a href="<?php echo home_url(); ?>" class="btn btn-lrn-more">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>