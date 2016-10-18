<?php
    global  $options_path,$includes_path;
    
    define('THEME_NAME', 'Lime');
    
//    remove_filter( 'the_content', 'wpautop' );
//    remove_filter( 'the_excerpt', 'wpautop' );

    $includes_path = TEMPLATEPATH . '/includes/';
    $options_path = TEMPLATEPATH . '/theme-options/'; 
    $plugin_path = TEMPLATEPATH . '/plugin/';
    $metabox_path = TEMPLATEPATH . '/metaboxes/';  
    $customise_path = $includes_path . '/customize/';      
    
    /**
    *Theme CONSTANTS  
    */
    define( 'WPCF7_AUTOP', false );
    if(!defined('THEME_INC')) define( 'THEME_INC', $includes_path );
    if(!defined('THEME_OPT')) define( 'THEME_OPT', $options_path );
    if(!defined('THEME_PLUG')) define( 'THEME_PLUG', $plugin_path );
    if(!defined('THEME_METAS')) define( 'THEME_METAS', $metabox_path );
    if(!defined('THEME_CUSTOMIZE')) define( 'THEME_CUSTOMIZE', $customise_path );
    

	/**
    *Theme Include functions 
    */
	require_once $includes_path . 'wp_bootstrap_navwalker.php';  //Loading jQuery and Scripts
	require_once $includes_path . 'theme-scripts.php';  //Loading jQuery and Scripts
	require_once $includes_path . 'sidebar-init.php'; //Widget and Sidebar
	require_once $includes_path . 'register-widgets.php'; //widgets Register function
	require_once $includes_path . 'theme-function.php'; //
	require_once $includes_path . 'theme-init.php';//Theme init
	
    /**
    *Theme Ajax functions 
    */
	require_once $includes_path . 'theme-ajax.php';//Ajax Requerts
    
    /**
    *Theme Shortcode functions 
    */
//    include_once($includes_path . 'theme_shortcodes/alert.php');  //shortcode Advance
    require_once $includes_path . 'theme_shortcodes/shortcodes.php';//Shortcodes
//    include_once($includes_path . 'theme_shortcodes/tabs.php');
//    include_once($includes_path . 'theme_shortcodes/toggle.php');
//    include_once($includes_path . 'theme_shortcodes/html.php'); 
//    include_once($includes_path . 'theme_shortcodes/tinymce/tinymce_shortcodes.php'); //tinyMCE includes
    
    /**
    *Theme Options functions 
    */    
    require_once $options_path . 'theme-options.php';  //Theme Options
    require_once $options_path . 'admin-options.php'; //Theme Options Array
    
    /**
    *Theme Metabox functions 
    */
    require_once $plugin_path . 'activate-plugins.php'; //Required Plugins
    require_once $metabox_path . 'metabox-management.php';//Theme Options

    /**
    *Theme Customise functions 
    */
    require_once $customise_path . 'function-customs.php'; //Custom functions
    require_once $customise_path . 'meta-quickedit.php';  //Meta Quick Edit functions
    require_once $customise_path . 'theme-customization.php';//theme customization
    
   
    /**
    *Theme Custom filters and functions functions 
    */
   
add_filter("widget_title","title_filter",$itle);
function title_filter ($title){
        return htmlentities(strip_tags(apply_filters("the_content",$title),"<span>"));
}        
function cleanup_shortcode_fix($content) {
        $array = array('<p>[' => '[', ']</p>' => ']', ']<br />' => ']', ']<br>' => ']');
        $content = strtr($content, $array);
        return $content;
}
add_filter('the_content', 'cleanup_shortcode_fix');
add_filter('login_errors',create_function('$a', "return null;")); // removes detailed login error information for security
add_filter('get_comments_number', 'comment_count', 0);// Removes Trackbacks from the comment cout

function comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}

add_filter('the_content', 'remove_empty_p', 20, 1);
function remove_empty_p($content){
    $content = force_balance_tags($content);
    return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}
function clear_br($content){
    return str_replace("<p>&nbsp;</p>","", $content);
}
add_filter('the_content', 'clear_br');
add_filter('widget_text','the_content_custom');
function the_content_custom($content)
{
    return apply_filters('the_content',$content);
}
	
	//Stop WordPress from automatically inserting paragraph tags
	//remove_filter('the_content', 'wpautop');
	//remove_filter('the_content', 'wptexturize');

	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '&nbsp;<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

function get_difference_date($post_date){
     $current_date = date('F j, Y');
     $daylen = 60*60*24;

   return abs(floor((strtotime($current_date)-strtotime($post_date))/$daylen));
}
add_filter( 'wpcf7_form_elements', 'rl_wpcf7_form_elements' );
function rl_wpcf7_form_elements( $content ) {
    // global $wpcf7_contact_form;
    
    $rl_pfind = '/<br>/';
    $rl_preplace = '<p class="wpcf7-form-text">'; 
    $content = preg_replace( $rl_pfind, $rl_preplace, $content, 2 );
 
    return $content;    
}
 
add_filter( 'wpcf7_form_class_attr', 'rl_wpcf7_form_class_attr' );
function rl_wpcf7_form_class_attr( $content ) {
 
    $rl_formfind = '/wpcf7-form/';
    $rl_formreplace = 'wpcf7-form clearfix';
    $content = preg_replace( $rl_formfind, $rl_formreplace, $content );    
    
    return $content;
}
?>
