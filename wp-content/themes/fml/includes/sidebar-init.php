<?php
function elegance_widgets_init() {
  
 // Location: at the bottom of the content
    register_sidebar(array(
        'name'                    => 'What We do intro',
        'id'                         => 'wwd',
        'description'   => __( 'Located under banner'),
        'before_widget' => '<section><div class="container"><div class="row"><div class="col-lg-12 text-center">',
        'after_widget' => '</div></div></div></section>',
        'before_title' => '<h2 class="section-heading font-capa text-green">',
        'after_title' => '</h2>',
    ));           
//    register_sidebar(array(
//        'name'                    => 'What We Do Full Description',
//        'id'                         => 'wwdf',
//        'description'   => __( 'Located under banner'),
//        'before_widget' => '',
//        'after_widget' => '',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>',
//    ));           
    register_sidebar(array(
        'name'                    => 'Who we are',
        'id'                         => 'wwr',
        'description'   => __( 'Located under What We Do Section'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));           
}
add_action( 'widgets_init', 'elegance_widgets_init' );
?>