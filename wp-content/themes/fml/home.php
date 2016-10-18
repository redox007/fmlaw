<?php
/*
 * Template Name: Default Blog
 */
?>
<?php get_header('home'); ?>

<div id="home-content" class="">
    <div class="home-content-inner">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 two-box joob-seeker-box">
            <div class="row" style="height: 100%">
                <div class="jb-inner-slider">
                    <div class="jb-inner">
                        <div class="job-seeker-text text-center">
                            <?php
                            $jblink = get_option('lime_jpl');
                            $jblink = ($jblink) ? $jblink : '#';
                            ?>
                            <a href="<?php echo $jblink; ?>">JOB SEEKER</a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="ors">OR</span>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 two-box employer-box">
            <?php
            $eplink = get_option('lime_epl');
            $eplink = ($eplink) ? $eplink : '#';
            ?>
            <div class="row"  style="height: 100%">
                <div class="ep-inner-slider">
                    <div class="ep-inner">
                        <div class="employer-text text-center">
                            <a href="<?php echo $eplink; ?>">EMPLOYER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php get_footer('home'); ?>