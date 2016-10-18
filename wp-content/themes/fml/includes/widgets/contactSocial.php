<?php
	class ContactSocial extends WP_Widget
		{
			function ContactSocial()
			{
				$widget_ops = array('description' => 'Displays Social Icons and informations');
				$control_ops = array('width' => 400, 'height' => 600);
				parent::WP_Widget(false,$name='Creative Contact Social Icons',$widget_ops,$control_ops);
			}
			/* Displays the Widget in the front-end */
			function widget($args, $instance)
			{
				extract($args);
				
				$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? 'From the Blog' : esc_html( $instance['title'] ) );
				
				
				echo $before_widget;
				if ( $title )
				echo $before_title . $title . $after_title;				
				$recent_posts = wp_get_recent_posts(array('post_status'=>'publish'), OBJECT);					
				if(!empty($instance['fb_url'] ) || !empty($instance['twtr_url'] ) ||!empty($instance['gp_url'] )):
		?>
		     <ul class="contact-social clearfix">
             	<?php 
						if(!empty($instance['fb_url'] ))
						{
				?>
             						<li class="col-sm-4 col-md-12">
										<div class="people-socials-wrapper clearfix">
                                                                    <figure class="socials people-social-figure fb col-md-2 col-sm-2 col-xs-2">
                                                                        <a class="" href="http://www.facebook.com/<?php echo $instance['fb_url']; ?>" target="_blank">
                                                                          <i class="fa fa-facebook"></i>
                                                                        </a>
                                                                    </figure>
                                                                    <figure>
                                                                            <figcaption class="col-md-6 col-sm-6 col-xs-6 people-social-figcaption">
                                                                               <?php echo facebook_fans($instance['fb_url']); ?> Fans
                                                                            </figcaption>
                                                                    </figure>
                                         </div>         
										
                                    </li>				
                <?php
						}				
						if(!empty($instance['twtr_url'] ))
						{
				?>
             						<li class="col-sm-4 col-md-12">
										<div class="people-socials-wrapper clearfix">
                                                                    <figure class="socials people-social-figure tweet col-md-2 col-sm-2 col-xs-2">
                                                                        <a class="" href="http://www.twitter.com/<?php echo esc_html($instance['twtr_url']); ?>" target="_blank">
                                                                          <i class="fa fa-twitter"></i>
                                                                        </a>
                                                                    </figure>
                                                                    <figure>
                                                                            <figcaption class="col-md-6 col-sm-6 col-xs-6 people-social-figcaption">
                                                                               <?php echo twitter_followers(esc_html($instance['twtr_url']),esc_html($instance['twtr_consumer_key']),esc_html($instance['twtr_consumer_secret']) );  ?> Followers
                                                                            </figcaption>
                                                                    </figure>
                                         </div>         
                                    </li>						
                <?php
						}
						
				?>
             						
			</ul>		
		<?php
				endif;								
				echo $after_widget;
			}
		
			/*Saves the settings. */
			function update($new_instance, $old_instance){
				$instance = $old_instance;
				$instance['title'] = stripslashes($new_instance['title']);				
				$instance['fb_url'] = $new_instance['fb_url'];
				$instance['twtr_url'] = $new_instance['twtr_url'];
//				$instance['gp_url'] = $new_instance['gp_url'];
//				$instance['gp_api_key'] = $new_instance['gp_api_key'];
				$instance['twtr_consumer_key'] = $new_instance['twtr_consumer_key'];
				$instance['twtr_consumer_secret'] = $new_instance['twtr_consumer_secret'];
			
				return $instance;
			}
		
		    /*Creates the form for the widget in the back-end. */
			function form($instance){
				
				//Defaults
				$instance = wp_parse_args( (array) $instance, array( 'title'=>'SOCIAL WITH US') );				
				$title = esc_html($instance['title']);				
				$fb_url=esc_html($instance['fb_url']);
				$twtr_url=esc_html($instance['twtr_url']);
				//$gp_url=esc_html($instance['gp_url']);
				//$gp_api_key=esc_html($instance['gp_api_key']);
				$twtr_consumer_key=esc_html($instance['twtr_consumer_key']);
				$twtr_consumer_secret=esc_html($instance['twtr_consumer_secret']);
				$args = array(
							'orderby'            => 'name', 
							'order'              => 'ASC',
							'hide_empty'         => 1, 
							'selected'           => $recentPost,
							'name'               => $this->get_field_name('recentPost'),
							'id'                 => $this->get_field_id('recentPost'),
							'class'              => 'postform',
						);
						
				# Title
				echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
				echo '<p>';
				echo '<label for="' . $this->get_field_id('fb_url') . '">' . 'Facebook Page: (e.g : Itobuz)' . '</label>';
				echo '<input class="widefat" id="' . $this->get_field_id('fb_url') . '" name="' . $this->get_field_name('fb_url') . '" type="text" value="' . $fb_url . '" />';
				echo '</p>';
				
				echo '<p>';				
						echo '<p>';
						echo '<label for="' . $this->get_field_id('twtr_url') . '">' . 'Twitter Screen Name: (e.g :itobuztech) ' . '</label>';				
						echo '<input class="widefat" id="' . $this->get_field_id('twtr_url') . '" name="' . $this->get_field_name('twtr_url') . '" type="text" value="' . $twtr_url . '" />';
						echo '</p>';
						
						echo '<p>';
						echo '<label for="' . $this->get_field_id('twtr_consumer_key') . '">' . 'Twitter Consumer Key: ( <a href="https://www.youtube.com/watch?v=5PUC9yGS4RI">Consumer Key</a>) ' . '</label>';
						echo '<input class="widefat" id="' . $this->get_field_id('twtr_consumer_key') . '" name="' . $this->get_field_name('twtr_consumer_key') . '" type="text" value="' . $twtr_consumer_key . '" />';
						echo '</p>';
						
						echo '<p>';
						echo '<label for="' . $this->get_field_id('twtr_consumer_secret') . '">' . 'Twitter Consumer Secret: (<a href="https://www.youtube.com/watch?v=5PUC9yGS4RI">Consumer Secret Key</a>) ' . '</label>';
						echo '<input class="widefat" id="' . $this->get_field_id('twtr_consumer_secret') . '" name="' . $this->get_field_name('twtr_consumer_secret') . '" type="text" value="' . $twtr_consumer_secret . '" />';
						echo '</p>';
				echo '</p>';
				
				echo '<p>';	
						echo '<p>';		
						echo '<label for="' . $this->get_field_id('gp_url') . '">' . 'Google Plus Id:' . '</label>';
						echo '<input class="widefat" id="' . $this->get_field_id('gp_url') . '" name="' . $this->get_field_name('gp_url') . '" type="text" value="' . $gp_url . '" />';
						echo '</p>';
						
						echo '<p>';
						echo '<label for="' . $this->get_field_id('gp_api_key') . '">' . 'Google API Key:' . '</label>';
						echo '<input class="widefat" id="' . $this->get_field_id('gp_api_key') . '" name="' . $this->get_field_name('gp_api_key') . '" type="text" value="' . $gp_api_key . '" />';
						echo '</p>';
				echo '</p>';

			}			
		
		}// end CustomLogoWidget class		
//                add_action( 'widgets_init', create_function( '', 'return register_widget("ContactSocial");' ) );
		    function ContactSocial() {
		  register_widget('ContactSocial');
		}
     add_action('widgets_init', 'ContactSocial');

?>