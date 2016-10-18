<!--<footer></footer>-->
</section>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vegas.min.js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $('.jb-inner-slider').vegas({
            delay: 7000,
            timer: false,
//            shuffle: true,
            slides: [
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img1.1.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img1.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img-1.2.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rpotate-img-1.3.jpg'}
            ]
        });
        $('.ep-inner-slider').vegas({
            delay: 7000,
            timer: false,
//            shuffle: true,
            slides: [
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img-2.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img-2.1.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img-2.2.jpg'},
                {src: '<?php bloginfo('template_url'); ?>/img/rotate-img-2.3.jpg'}
            ]
        });
    });
</script>
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work proporly -->
<?php echo stripslashes(get_option('link_ga_code')); ?><!-- Show Google Analytics -->
</body>
</html>