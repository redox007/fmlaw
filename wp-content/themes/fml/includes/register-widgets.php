<?php
/**
 * Loads up all the widgets defined by this theme. Note that this function will not work for versions of WordPress 2.7 or lower
 *
 */
//include_once (TEMPLATEPATH . '/includes/widgets/custom-menu-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/custom-socials-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/my-threebox-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/my-top_right-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/my-latest_news-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/my-testi_side-widget.php');
//include_once (TEMPLATEPATH . '/includes/widgets/contactSocial.php');


add_action("widgets_init", "load_my_widgets");

function load_my_widgets() {
//    register_widget("MY_CustomMenu");
//    register_widget("MY_CustomSocials");
//    register_widget("MY_ThreeBoxes");     
//    register_widget("MY_ImageContent");     
//    register_widget("MY_News");     
//    register_widget("MY_Testimonial");    
//    register_widget("ContactSocial");   
}
?>