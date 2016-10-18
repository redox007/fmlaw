<?php
//page Post categoryFrom page
  add_action( 'add_meta_boxes', 'add_page_metaboxes' );
  add_action('save_post', 'wpt_save_page_meta'); 
  
  // Add the Events Meta Boxes

// Add the Events Meta Boxes

function add_page_metaboxes() {
     add_meta_box('page_metas_custom', 'Page Metas', 'page_post_meta_info', 'page', 'normal', 'high');
}

// The Event Location Metabox

function page_post_meta_info() {
    global $post;
     echo '<input type="hidden" name="pagemeta_bottom_noncename" id="pagemeta_bottom_noncename" value="' .
     wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
     
     $prefix = "_link_";
     
      $page_bottom = get_post_meta($post->ID, $prefix.'page_bottom', true);

      ?>
     <table width="100%" cellpadding="2" cellpadding="1">
        <tbody>
        
            <tr>
               <td colspan="2"><b>Page Bottom Content</b></td>
            </tr>
                    
            <tr> <td colspan="2"><?php wp_editor($page_bottom,$prefix.'page_bottom'); ?></td></tr>

        </tbody>
   
    </table>
    

<?php }
// Save the Metabox Data

function wpt_save_page_meta($post_id) {
    global $wpdb;  
        // verify if this is an auto save routine. 
        // If it is our form has not been submitted, so we dont want to do anything
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
                return;
        // verify this came from the our screen and with proper authorization,
        // because save_post can be triggered at other times
        if ( ( isset ( $_POST['pagemeta_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['pagemeta_noncename'], plugin_basename( __FILE__ ) ) ) )
                return;
        // Check permissions
        if ( ( isset ( $_POST['post_type'] ) ) && ( 'page' == $_POST['post_type'] )  ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }       
        }
        else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
            }
        } 
   
      /* Get the posted data and sanitize it for use as an HTML class. */
    $new_meta_value =  $_POST['_link_page_bottom']   ;


    /* Get the meta key. */
    $meta_key = '_link_page_bottom';


    /* Get the meta value of the custom field key. */
    $meta_value = get_post_meta( $post_id, $meta_key, true );

    /* If a new meta value was added and there was no previous value, add it. */
    if ( $new_meta_value && '' == $meta_value )
        add_post_meta( $post_id, $meta_key, $new_meta_value, true );

    /* If the new meta value does not match the old value, update it. */
    elseif ( $new_meta_value && $new_meta_value != $meta_value )
        update_post_meta( $post_id, $meta_key, $new_meta_value );

    /* If there is no new meta value but an old value exists, delete it. */
    elseif ( '' == $new_meta_value && $meta_value )
        delete_post_meta( $post_id, $meta_key, $meta_value );

}

// save the custom fields
  
?>
