<?php
// =============================== My Post Cycle widget ======================================
class MY_Testimonial extends WP_Widget {
    /** constructor */
    function MY_Testimonial() {
        parent::WP_Widget(false, $name = 'My - Testimonial');    
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {        
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
        $no =  $instance['no'];
        
        
        $args = array(
    'cat' => $catid,
    'orderby'=> 'ID',
    'order'=> 'DESC',
    'order'=> 'DESC',
    'posts_per_page'=> $no 

); 
   $query = new WP_Query( $args );
  // print_r($query);
        ?>
              <?php echo $before_widget; ?>
              
              <div class="sidebar-inner" style="border: none;">
                    <h4><?php echo $title; ?></h4>
                    <?php query_posts("post_type=testimonial&showposts=".$no."post_status=publish"); ?>
                    <ul class="s-testi">
                       <?php  while(have_posts()) : the_post(); ?>
                        <li><?php the_post_thumbnail('testimonial', array('class' => 'alignleft')); ?>
                        <?php echo get_the_content(); ?><a href="<?php the_permalink(); ?>" class="s-more">MORE</a></li>
                         <?php endwhile;
                          ?>
                    </ul>
                </div>
                  <?php wp_reset_query(); ?>
              
                 
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
            $catid= esc_attr($instance['catid']);
            
    ?>
    
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'stacy'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
     
      <p><label for="<?php echo $this->get_field_id('no'); ?>"><?php _e('No of Post:', 'stacy'); ?> <input class="widefat" id="<?php echo $this->get_field_id('no'); ?>" name="<?php echo $this->get_field_name('no'); ?>" type="text" value="<?php echo $no; ?>" /></label></p>
     
      
      <?php 
    }

} // class Cycle Widget
 