<?php
// Grid Columns
   
add_shortcode('tabwrap', 'shortcode_tabwrap');
function shortcode_tabwrap($atts, $content = null,$shortcodename =""){ 
    
    $output = '';

    $output .= '<div class="tab">';
        $output .= '<div>';
            $output .= do_shortcode($content);
        $output .= '</div>';
    $output .= '</div>';
    
    return $output;
 
}
add_shortcode('post', 'shortcode_post');
function shortcode_post($atts, $content = null,$shortcodename =""){ 
    
    extract(shortcode_atts(array(
                "type" => 'post',                                             
                'num' => '5'
        ), $atts)); 
        
    query_posts("post_type=".$type."&showposts=".$num."&post_status=publish");
    
    $output = "<ul>";
    
    while(have_posts()):the_post();
    
       $output.="<li><a href='".get_permalink()."'>".get_the_title()."</a></li>"; 
    
    endwhile;
    
    $output .= '</ul>';
    
    wp_reset_query();
    
    return $output;
 
}
add_shortcode('c-f-button','feedback_button' );
function feedback_button($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<span class='".$shortcodename."'>";
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('span','feedback_button_bold' );
function feedback_button_bold($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<span >";
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('col-3','content_maker_col_sm_3' );
function content_maker_col_sm_3($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-3'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('col-1','content_maker_col_sm_1' );
function content_maker_col_sm_1($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-1'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('col-6','content_maker_col_sm_6' );
function content_maker_col_sm_6($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-6'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('col-4','content_maker_col_sm_4' );
function content_maker_col_sm_4($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-4'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('col-8','content_maker_col_sm_8' );
function content_maker_col_sm_8($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-8'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('col-9','content_maker_col_sm_9' );
function content_maker_col_sm_9($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='col-md-9'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('red-button','content_maker_col_sm_red_button' );
function content_maker_col_sm_red_button($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<span class='red-button'>";
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('gap','content_maker_gap' );
function content_maker_gap($atts, $content = null,$shortcodename =""){
    
    extract(shortcode_atts(array(
                "margin" => '35'
        ), $atts));
    $class = ($margin == "default") ? "class='marginbottomlarger clearfix'" : 'style="margin-bottom: '.$margin.'px;"';
    
    $output ="";
    $output .= "<div ".$class.">";
    $output .= '</div>';
    return $output;
   
}
add_shortcode('imgFrame','content_maker_col_sm_imgFrame' );
function content_maker_col_sm_imgFrame($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='img-frame'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('section','content_maker_col_section' );
function content_maker_col_section($atts, $content = null,$shortcodename =""){
    
       extract(shortcode_atts(array(
                "margin" => 'yes'
        ), $atts));
    
    $class = ($margin == "yes") ? "wrapper marginbottomlarger" : 'wrapper' ;
    
    $output ="";
    $output .= "<section class='".$class."'>";
    $output .= do_shortcode($content);
    $output .= '</section>';
    return $output;
   
}

add_shortcode('map','content_maker_map' );
function content_maker_map($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='map'>";
    $output .= apply_filters('the_content',get_option('lacks_contact_map'));;
    $output .= '</div>';
    return $output;
   
}
add_shortcode('helpfull-wrapper','content_helpful_bodyleft' );
function content_helpful_bodyleft($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='helpful-bodyleft'>";
    $output .= apply_filters('the_content',get_option('lacks_contact_map'));;
    $output .= '</div>';
    return $output;
   
}
add_shortcode('clearfix','content_maker_col_clear' );
function content_maker_col_clear($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='clearfix'>";
    $output .= '</div>';
    return $output;
   
}
add_shortcode('gray-bg','content_maker_col_gray_bg' );
function content_maker_col_gray_bg($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= "<div class='gray-bg'>";
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('before-after','content_maker_col_before_after' );
function content_maker_col_before_after($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div id="before-after" class="four-box-title">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('testimonials-head','content_maker_col_testimonials_home' );
function content_maker_col_testimonials_home($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div id="testimonials-home" class="four-box-title">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('shadow','content_maker_col_shadow' );
function content_maker_col_shadow($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="devider-shaddow clearfix"><img src="'.get_bloginfo('template_url').'/img/shadow.png" class="img-responsive" alt="shadow">';
    $output .= '</div>';
    return $output;
   
}

add_shortcode('before-after-content','content_maker_col_before_before_after_content' );
function content_maker_col_before_before_after_content($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="before-after-content">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('services-title','content_maker_col_services_title' );
function content_maker_col_services_title($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="services-title">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('services-info','content_maker_col_services_info' );
function content_maker_col_services_info($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="services-info">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('spacer','content_maker_col_services_spacer' );
function content_maker_col_services_spacer($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<span class="spacer">';
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('intro','content_maker_col_services_why_us_top' );
function content_maker_col_services_why_us_top($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="why-us-top">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('intro-image','content_maker_col_services_intro_image' );
function content_maker_col_services_intro_image($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<span class="alignleft intro">';
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('number','content_maker_col_services_number' );
function content_maker_col_services_number($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<span>';
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('why-text','content_maker_col_services_why_text' );
function content_maker_col_services_why_text($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="why-us-body-content-contaner clearfix">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('red-text','content_maker_red_text' );
function content_maker_red_text($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<span class="red-textss">';
    $output .= do_shortcode($content);
    $output .= '</span>';
    return $output;
   
}
add_shortcode('cl-wrapper','content_maker_cl_wrapper' );
function content_maker_cl_wrapper($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('cl-wrapper-top','content_maker_cl_wrapper_top' );
function content_maker_cl_wrapper_top($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-top clearfix">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('cl-wrapper-bottom','content_maker_cl_wrapper_bottom' );
function content_maker_cl_wrapper_bottom($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-bottom">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('cl-packages-inner','content_maker_cl_packages_inner' );
function content_maker_cl_packages_inner($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-top-inner">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('contact-text','content_maker_contact_textr' );
function content_maker_contact_textr($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="contact-text">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('height-fixer','content_maker_height_fixer' );
function content_maker_height_fixer($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-top-inner-in">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('cl-packages-graybox','content_maker_cl_packages_graybox' );
function content_maker_cl_packages_graybox($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-bottom-graybox">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}
add_shortcode('cl-pacges-bottom','content_maker_cl_pages_bottom' );
function content_maker_cl_pages_bottom($atts, $content = null,$shortcodename =""){
    
    $output ="";
    $output .= '<div class="cleaning-pacges-bottom-bottom">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
   
}

add_shortcode('faq','function_faq' );
function function_faq($atts, $content = null,$shortcodename =""){ 
    
    extract(shortcode_atts(array(
                "num" => '10'
        ), $atts)); 
    
    query_posts("post_type=".$shortcodename."&showposts=".$num."&post_status=publish&order=ASC");
    $count = $wp_query->post_count;
    
    $output = "";
    
    while(have_posts()):the_post();
        $output .= '<div class="col-md-4">
                    <div class="faq-home">
                        <h2>'.get_the_title().'</h2>
                        <p>'.get_the_content().'</p>
                    </div>
                </div>'; 
    endwhile;
    
    wp_reset_query();
    
    return $output.'<div class="clearfix".</div>';     
    
}
add_shortcode('testimonial','function_testi' );
function function_testi($atts, $content = null,$shortcodename =""){ 

    $output = "";

                     $meta_query =  array(
                        'key' => '_lacks_testi_featured',
                        'value' => "on",
                        'compare' => '=',
                        'type' => 'CHAR'
                        );
                    $arg = array(
                        "post_type" => "testi",
                        "post_status" => "publish",
                        "showposts" => 1,
                        "orderby" => "rand",
                        "meta_query" => array($meta_query),
                            );
                    query_posts($arg);
                        while(have_posts()):the_post();
                        global $post;
                        $anchor = get_post_meta($post->ID,'_lacks_testi_url',true);
                        $author = get_post_meta($post->ID,'_lacks_testi_author',true);
                        $company = get_post_meta($post->ID,'_lacks_testi_author_company',true);
                        //$anchor = <a href="#">— Ricardo McLaughlin, Sun City West AZ</a>
                        $anchor = ($anchor) ? "<a href='".$anchor."'>—".$author.",".$company."</a>" : "<a>—".$author.",".$company."</a>";
                  
           $output .= ' <div class="col-md-9">
                <div class="testimonials-home-box">
                    <p>'.get_the_excerpt().'</p>
                    '.$anchor.'
                </div>
            </div>
            <div class="col-md-3">
                <div class="testimonials-home-img"> 
                '.get_the_post_thumbnail($post->ID,"testi-thumbnail",array("class" => "img-responsive aligncenter img-circle"));
                    
                    if($author):
                        $output .= '<h2>'.$author.'</h2>';
                     endif;
                    
                    if($company):
                        $output .= '<p>'.$company .'</p>';
                     endif;
  
               $output .= '</div>
            </div>';
            endwhile; 
    
    wp_reset_query();
    
    return $output.'<div class="clearfix".</div>';     
    
}

add_shortcode('jobs','function_jobs' );
function function_jobs($atts, $content = null,$shortcodename =""){ 
    
    extract(shortcode_atts(array(
                "cat" => '',
                "num" => '10'
        ), $atts)); 
        
        $arg = array(
            'post_type' => "jobs",
            'jobs-cat' => $cat,
            'showposts' => $num
        );

  query_posts($arg);
  
  $output = "<div class='about-us-content'>
  <h2>Recent Jobs</h2>
  <div class='fixer'>
  ";
  
  $i=0;
  global $wp_query;
  $count = $wp_query->post_count;
  while(have_posts()):the_post();
  
  $author = get_the_author();
  $aid = get_the_author_id();
  $date = get_the_date();
  $d = get_difference_date($date);
  
    if($i % 2 == 0 && $i != $count){
      
       $output .= "<div class='clearfix'></div>
       </div><div class='fixer'>";
       
  } 
 // print_r($d); 
  $output .='<div class="col-md-6">
                            <div class="recent-job-loop clearfix">
                                <h1>'.$d.' day ago</h1>
                                <div class="col-md-3 pld">
                                    <div class="recent-job-avotar">
                                        '.get_avatar( $aid , '48' ).'
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h2>'.get_the_author_meta( "display_name", $aid ).'</h2>
                                    '. apply_filters("the_content",get_the_content()).'
                                </div>
                            </div>
                        </div>';
      $i++;
  endwhile;
  $output .= '<div class="clearfix"></div>
        </div> 
    </div>
  <div class="clearfix"></div>';
  wp_reset_query(); 
   
  return $output;
}
        
add_shortcode('carousel','function_carousel' );
function function_carousel($atts, $content = null,$shortcodename =""){ 
    
    extract(shortcode_atts(array(
                "type" => 'after-before',
                "ctype" => 'carousel-one',
                "num" => '10',
                "slidenum" => '2',
        ), $atts)); 
        
    global $wp_query;    
   
    $id = "carousel-example-generic-".$type.rand(100,500);
    
    //query_posts("post_type=".$type."&showposts=".$num."&post_status=publish&order=ASC");
    
    $count = $wp_query->post_count;
    
    $thumb ="full";
    
    if($type == "after-before"){
        $thumb ="after-before-thumbnail";
    }elseif($type == "team"){
        $thumb ="team-thumbnail";
    }
     
    if($count < $num ) $num = $count;
    
    $nav = '<ol class="carousel-indicators">';
    if($ctype == 'carousel-two')$nav = '<ol class="carousel-linked-nav pagination">';
    
    $totalslide = intval($num / $slidenum);
    
    if($totalslide == 0){
        $slidenum = 1; 
    }
    if($slidenum == 1){
      $totalslide = $count;  
    }

            
    $posts = get_posts(array("post_type" => $type));
    
    //print_r($posts);
    
   
   $droapdown = '<select id="select-carousel">';
   foreach($posts as $post){
        $droapdown .='<option value="'.$post->ID.'">'.$post->post_title.'</option>';   
   }
    
   // if($totalslide == $slidenum) $totalslide = $totalslide + 1;
    
    for($i=0;$i<$totalslide;$i++){
        
       if($i == 0){ 
           $nav .= '<li data-target="#'.$id.'" data-slide-to="'.$i.'" class="active">';
           if($ctype == 'carousel-two')$nav .= '<a href="#'.($i+1).'">'.($i+1).'</a>';
           $nav .= '</li>';
       }else{
           $nav .= '<li data-target="#'.$id.'" data-slide-to="'.$i.'" class="">';
           if($ctype == 'carousel-two')$nav .= '<a href="#'.($i+1).'">'.($i+1).'</a>';
           $nav .= '</li>';
       } 
       
    }
    $nav .= '</ol>';
    $cid = ($type == "team") ? "crousel1" : "crousel";
    
    
    
    $output = '<div id="crousel1">
                    <div id="'.$id.'" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">';
                        
    if($ctype == 'carousel-two'){
                        
    $output = '<div class="crousel-repet">
                            <div class="crousel-repet-inner">
                                <div id="'.$id.'" class="carousel slide">
                                        <div class="carousel-inner">';
    }
                        
                    
    if($slidenum != 1){
       $output .= '<div class="item active">'; 
    }

    $i = 1;
    while(have_posts()):the_post();
    global $post;
    //$output .='<div class="item">'.get_the_post_thumbnail($post->ID,$thumb,array("class"=>"img-responsive")).'</div>'; 
     
      if($slidenum == 1){
            if($i == 1){
               $output .='<div class="item active">'.get_the_post_thumbnail($post->ID,$thumb,array("class"=>"img-responsive")).'</div>'; 
            }else{
                $output .='<div class="item">'.get_the_post_thumbnail($post->ID,$thumb,array("class"=>"img-responsive")).'</div>';  
            } 
        }else{
            if($slidenum <=4 ){
                $n = 12 / $slidenum;
                $span = "col-md-".$n;
                $output .= '<div class="'.$span.'">'.get_the_post_thumbnail($post->ID,$thumb,array("class"=>"img-responsive"))."</div>";
            }else{
                $output .= get_the_post_thumbnail($post->ID,$thumb,array("class"=>"img-responsive"));     
            }
            
        } 
        if($slidenum !=1){
            if( $i % $slidenum == 0 && $i != $count ){
            $output .= '</div><div class="item">';
             }    
        }

       // $output .="<td><a href='".get_permalink()."'>".$title."</a></td>"; 
       //$output.="<li><a href='".get_permalink()."'>".get_the_title()."</a></li>"; 
        $i++;
        
    endwhile;
    
    if($slidenum != 1){
      $output .= '</div>'; 
    }
    
    $output .= '</div>';
    
    $output .= $nav;
    
    
    if($ctype == 'carousel-one'){ 
        
    $output .= ' <a class="left carousel-control" href="#'.$id.'" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                      </a>
                      <a class="right carousel-control" href="#'.$id.'" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                      </a>';
    }else{
       $output .= ' <a class="left carousel-control" href="#'.$id.'" data-slide="prev">
                      </a>
                      <a class="right carousel-control" href="#'.$id.'" data-slide="next">
                      </a>'; 
    }
    
    $output .= '</div>
        </div>
    </div>';
    
    if($ctype == 'carousel-two'){ 
        // $output .= '</div>';
    }
    
    wp_reset_query();
    
    return $output;
 
}



 add_shortcode('collapsibles','bs_collapsibles' );
  function bs_collapsibles( $atts, $content = null ) {
    
    if( isset($GLOBALS['collapsibles_count']) )
        $GLOBALS['collapsibles_count']++;
    else
        $GLOBALS['collapsibles_count'] = 0;

    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );
    
    // Extract the tab titles for use in the tab widget.
    preg_match_all( '/collapse title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
    
    $tab_titles = array();
    if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
    
    $output = '';
    
    if( count($tab_titles) ){
      $output .= '<div class="panel-group myaccordion" id="accordion-' . $GLOBALS['collapsibles_count'] . '">';
      $output .= do_shortcode( $content );
      $output .= '</div>';
    } else {
      $output .= do_shortcode( $content );
    }
    
    return $output;
  } 
add_shortcode('collapse','bs_collapse' );
function bs_collapse( $atts, $content = null ) {

    if( !isset($GLOBALS['current_collapse']) )
      $GLOBALS['current_collapse'] = 0;
    else 
      $GLOBALS['current_collapse']++;


    $defaults = array( 'title' => 'Tab', 'state' => '');
    extract( shortcode_atts( $defaults, $atts ) );
    
    if (!empty($state)) 
      $state = 'in';

    return '
   <div class="panel panel-default">
      <div class="panel-heading">
       <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-' . $GLOBALS['collapsibles_count'] . '" href="#collapse_' . $GLOBALS['current_collapse'] . '_'. sanitize_title( $title ) .'">
        <span>'.($GLOBALS['current_collapse']+1).'</span>  ' . $title . ' 
        </a>
        </h4>
      </div>
      <div id="collapse_' . $GLOBALS['current_collapse'] . '_'. sanitize_title( $title ) .'" class="panel-collapse collapse ' . $state . '">
        <div class="panel-body">
          ' . do_shortcode( $content ) . ' 
        </div>
      </div>
    </div>
    ';
  }
//Tabs Shortcode
add_shortcode('tabs','bs_tabs');
  function bs_tabs( $atts, $content = null ) {
    
    if( isset($GLOBALS['tabs_count']) )
        $GLOBALS['tabs_count']++;
    else
        $GLOBALS['tabs_count'] = 0;

    $defaults = array();
    extract( shortcode_atts( $defaults, $atts ) );
    
    // Extract the tab titles for use in the tab widget.
    preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
    
    $tab_titles = array();
    if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
    
    $output = '';
    
    if( count($tab_titles) ){
      $output .= ' <div class="tab"><div>';
      $output .= do_shortcode( $content );
      $output .= '</div></div>';
    } else {
      $output .= do_shortcode( $content );
    }
    print_r( $GLOBALS['tabs_count']);
    return $output;
  }
//  add_shortcode('tab','bs_tab' );
function bs_tab( $atts, $content = null ) {

    if( !isset($GLOBALS['current_tab']) )
      $GLOBALS['current_tab'] = 0;
    else 
      $GLOBALS['current_tab']++;


    $defaults = array( 'title' => 'Tab', 'state' => '');
    extract( shortcode_atts( $defaults, $atts ) );
    
    if (!empty($state)) 
      $state = 'active';
      
  }  
add_action( 'after_setup_theme', 'lacks_setup' );
?>