<!DOCTYPE html>
<!--[if lte IE 7]><html class="ie ie7"> <![endif]-->
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <title>
            <?php
            if (is_tag()) {
                echo 'Tag Archive for &quot;' . $tag . '&quot; | ';
                bloginfo('name');
            } elseif (is_archive()) {
                wp_title();
                echo ' Archive | ';
                bloginfo('name');
            } elseif (is_search()) {
                echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
                bloginfo('name');
            } elseif (is_home()) {
                bloginfo('name');
            } elseif (is_404()) {
                echo 'Error 404 Not Found | ';
                bloginfo('name');
            } else {
                echo wp_title(' | ', false, right);
                bloginfo('name');
            }
            ?>
        </title>
        <meta name="keywords" content="<?php
        wp_title();
        echo ' , ';
        bloginfo('name');
        echo ' , ';
        bloginfo('description');
        ?>" />
        <meta name="description" content="<?php
        wp_title();
        echo ' | ';
        bloginfo('description');
        ?>" />
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="index" title="<?php bloginfo('name'); ?>" href="<?php echo get_option('home'); ?>/" />
        <link rel="icon" href="<?php echo get_option('link_fav'); ?>" type="image/x-icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />

        <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>

        <!-- Plugin CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" type="text/css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/creative.css" type="text/css">

    <!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie.css"><![endif]-->
        <!-- The HTML5 Shim is required for older browsers, mainly older versions IE -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" &nbsp;alt="" /></a>
        </div>
      <![endif]-->
        <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->   
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/ie.css"><![endif]-->
        <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script><![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond/js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
            var ajax_loader = "<?php echo get_bloginfo("template_url") ?>/<?php bloginfo('template_url'); ?>/img/ajax-loader.gif";
        </script>

        <?php $link_custom_css = get_option('pim_custom_css'); ?>
        <?php if ($link_custom_css) { ?>
            <style type="text/css">
    <?php echo $link_custom_css; ?>
            </style>
        <?php } ?>
    </head>

    <body id="page-top" <?php body_class('job-seeker-page'); ?>>
        <?php get_template_part('templates/tpl', 'contact-form'); ?>
        <nav id="mainNav" class="navbar">
            <div class="container">
                <div id="top-bar">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <a href="tel:<?php echo get_option('lime_contact'); ?>" class="call">
                                <img src="<?php bloginfo('template_url'); ?>/img/phone-call.png" /><?php echo get_option('lime_contact'); ?>
                            </a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="contact-top">
                                <li class="fb"><a href="<?php echo get_option('lime_fb'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="linkedin"><a href="<?php echo get_option('lime_in'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li class="contact-buttton"><a href="#"  data-toggle="collapse" data-target="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                    </button>
                    <?php
                    $logo_link = get_option('lime_logo_link');
                    $logo_link = ($logo_link) ? $logo_link : home_url();
                    ?>
                    <a class="logo" href="<?php echo $logo_link; ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo2.png" class="img-responsive" alt="LOGO"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    $menu = (get_post_meta(get_the_ID(), '_lime_page_menu', true));
                    $menu_arg = array(
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'menu_id' => 'topnav',
                        'depth' => 3,
                    );
                    if($menu){
                        $menu_arg['menu'] = $menu;
                    }else{
                        $menu_arg['theme_location'] = 'header_menu';
                    }
                    wp_nav_menu($menu_arg);
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <?php // print_r($menu_arg); ?>
