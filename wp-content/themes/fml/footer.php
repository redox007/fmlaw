
<footer id="footer">
    <div class="container">
        <hr class="footer-line">
        <div class="row">
            <div class="footer-container">
                <?php
                $logo_link = get_option('lime_logo_link');
                $logo_link = ($logo_link) ? $logo_link : home_url();
                ?>
                <div class="col-sm-4">
                    <a class="logo" href="<?php echo $logo_link; ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo2.png" class="img-responsive" alt="LOGO"></a>
                </div>

                <div class="col-sm-8 text-right">
                    <ul id="footer-contact" class="contact-top">
                        <li  class="caller-list"> 
                            <a href="tel:<?php echo get_option('lime_contact'); ?>" class="call">
                                <img src="<?php bloginfo('template_url'); ?>/img/phone-call.png" /><?php echo get_option('lime_contact'); ?>
                            </a>
                        </li>
                        <li class="fb"><a href="<?php echo get_option('lime_fb'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="linkedin"><a href="<?php echo get_option('lime_in'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="copyright">&copy; 2016 All rights reserved</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
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
        $('li.menu-item-has-children').click(function(){
            $(this).children('ul.sub-menu').slideToggle();
        });

    });
</script>

<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
<?php echo stripslashes(get_option('link_ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>