<?php
// =============================== My Post Cycle widget ======================================
new MY_SidebarTestimonial();
class MY_SidebarTestimonial extends WP_Widget {
    /** constructor */
    function MY_SidebarTestimonial() {
        parent::WP_Widget(false, $name = 'Sidebar Testimonial');
        add_action("widgets_init",array($this,"register_widget"));   
    }
    
   function register_widget(){
       register_widget(get_class($this));
   } 

    /** @see WP_Widget::widget */
    function widget($args, $instance) {        
        extract( $args );
    $title = apply_filters('widget_title', $instance['title']);
    $number = 1;
    $link = esc_attr($instance['all_link']);
        ?>
    <?php echo $before_widget; ?> 
             <?php 
                     $meta_query =  array(
                        'key' => '_lacks_testi_featured',
                        'value' => "on",
                        'compare' => '=',
                        'type' => 'CHAR'
                        );
                    $arg = array(
                        "post_type" => "testi",
                        "post_status" => "publish",
                        "showposts" => $number,
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
                    ?>
                    
                    <div class="sidebar-testi">
                        <h2><?php echo $title; ?></h2>
                        <div class="sidebar-testi-graybox">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <?php the_post_thumbnail('testi-thumbnail',array("class" => "img-responsive aligncenter")); ?>
                        <div class="sidebar-testi-img">
                            <?php if($author):?> 
                            <h5> <?php echo $author; ?></h5>
                            <?php endif; ?>
                           <?php if($company):?> 
                           <p> <?php echo $company; ?></p>
                           <?php endif; ?>
                        </div>
                    </div>
            <?php endwhile; 
                $i = 0;
            ?>

   
   <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {                
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {                
    $title = esc_attr($instance['title']);
    $number = esc_attr($instance['number']);
    
    
    
    
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'lacks'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
      <?php 
    }

} // class Cycle Widget


?>