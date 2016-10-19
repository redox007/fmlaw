
<footer id="footer">
    <div class="footer-top section-p">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php echo get_bloginfo('template_url'); ?>/img/logo-footer.jpg" />
                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">

                </div>
                <div class="col-sm-3">

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="text-center text-white">Fallu McMillan Pvt ltd @copy | Website by Suchandan Haldar </div>
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