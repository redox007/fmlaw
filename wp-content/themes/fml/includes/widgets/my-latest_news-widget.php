<?php
// =============================== My Post Cycle widget ======================================
class MY_News extends WP_Widget {
    /** constructor */
    function MY_News() {
        parent::WP_Widget(false, $name = 'Latest News');    
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {        
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        $no =  $instance['no'];
        $link =  $instance['link'];
        ?>
              <?php echo $before_widget; ?> 
              
              <div class="latest-news">
                <div id="latest-news-slider" class="flexslider">
                    <h2><?php echo $title; ?></h2>
                    <ul class="slides">
                    <?php query_posts("post_type=news&showposts=".$no."post_status=publish"); ?>   
                    <?php while(have_posts()):the_post(); ?>
                                               
                        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                            <?php the_content(); ?>
                        </li>
                        <?php endwhile;
                         wp_reset_query();
                         ?>
                     </ul>
               </div>
            </div>    
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
            $no = esc_attr($instance['no']);
            $link = esc_attr($instance['link']);
            
    ?>
    
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'pim'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
      <p><label for="<?php echo $this->get_field_id('no'); ?>"><?php _e('No of Post:', 'pim'); ?> <input class="widefat" id="<?php echo $this->get_field_id('no'); ?>" name="<?php echo $this->get_field_name('no'); ?>" type="text" value="<?php echo $no; ?>" /></label></p>
      
     
      
      <?php 
    }

} // class Cycle Widget
 ?>