<?php
function pim_script(){
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-2.2.4.min.js', false, '2.2.4');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', get_bloginfo('template_url').'/js/bootstrap.min.js',array('jquery'),'3.3.6',true);
    }
}
function pim_styles(){
    if (!is_admin()) {
        
         wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',false);

         wp_enqueue_style('bootstrap', get_bloginfo('template_url').'/css/bootstrap.min.css',false,'3.3.6');
         
         wp_enqueue_style('bootstrap-theme', get_bloginfo('template_url').'/css/bootstrap-theme.min.css',array('bootstrap'),'3.3.6');

         wp_enqueue_style('fontawesome', get_bloginfo('template_url').'/font-awesome/css/font-awesome.min.css',array('bootstrap'),'3.3.6');

         wp_enqueue_style('style', get_bloginfo('stylesheet_url'),array('bootstrap','fontawesome'));
    }
}

global $pagenow;

if ( !is_admin() && 'wp-login.php' != $pagenow ) {
    
    add_action('init', 'pim_script');
    add_action('init', 'pim_styles');

}

?>