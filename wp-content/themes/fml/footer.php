<footer id="footer">
    <div class="footer-top section-p">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                    $fiid = get_option('fmlaw_flogo');
                    if (!$fiid) {
                        $fiid = get_bloginfo('template_url') . "/img/logo-footer.jpg";
                    }
                    ?>
                    <img src="<?php echo $fiid ?>" class="img-responsive" />
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <?php if (is_active_sidebar('ftbx')) : ?>
                            <?php dynamic_sidebar('ftbx'); ?>
                        <?php endif; ?>
                        <div class="col-sm-3">
                            <h4 class="title">Connect</h4>
                            <ul class="contact-bottom">
                                <li class="fb"><a href="<?php echo get_option('fmlaw_fb');
                        ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="linkedin"><a href="<?php echo get_option('fmlaw_in'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="text-center text-white"><?php echo get_option('fmlaw_footer_text'); ?></div>
    </div>
</footer>
<!-- jQuery -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.equalheights.min.js"></script>
<!-- Plugin JavaScript -->
<script src="<?php bloginfo('template_url'); ?>/js/scrollreveal.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/js/jquery.fittext.js"></script>-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>
<!-- Custom Theme JavaScript -->
<!--<script src="<?php bloginfo('template_url'); ?>/js/creative.js"></script>-->

<script type="text/javascript">
    jQuery(function ($) {
        //        $('.wwd').equalHeights();
        $('ul.sub-menu').each(function (i, e) {
            $(e).append('<span class="angle"><img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/arrow-up.png" /></span>');
        });
        $(window).load(function () {
            var maxh = $('.wwd').first().height();
            $('.wwd').each(function (i, e) {
                maxh = $(e).height() > maxh ? $(e).height() : maxh;
            });
            setTimeout(function () {
                $('.wwd').height(maxh);
            }, 500);
        });

        $('body').on('click', '.wwd', function (e) {
            e.preventDefault();
            var id = $(this).attr('id');
            if ($(window).width() > 767) {
                $(this).find('.arrow-up').show();
                $(this).siblings().find('.arrow-up').hide();
            }
            $('[data-atr="#' + id + '"]').siblings().hide();
            $('[data-atr="#' + id + '"]').show();
        });
        $('li.menu-item-has-children').click(function () {
            $(this).children('ul.sub-menu').slideToggle();
        });

    });
</script>

<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
<?php echo stripslashes(get_option('link_ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>