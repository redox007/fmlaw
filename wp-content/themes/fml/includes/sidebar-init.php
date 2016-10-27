<?php

function elegance_widgets_init() {

    // Location: at the bottom of the content
    register_sidebar(array(
        'name' => 'What We do Box',
        'id' => 'wwd',
        'description' => __('Located Most of page'),
        'before_widget' => '<div class="section-pd what-we-do"><div class="container"><div class="row"><div class="col-sm-12">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<h2 class="box-heading text-center text-white">',
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
        'name' => 'Who we are Box',
        'id' => 'wwr',
        'description' => __('Located Most of page'),
        'before_widget' => '<div class="section-pd who-we-are"><div class="container"><div class="row"><div class="col-sm-12">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<h2 class="box-heading text-center text-white">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => 'Footer Boxes',
        'id' => 'ftbx',
        'description' => __('Located at the middle of the footer'),
        'before_widget' => '<div class="col-sm-3">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'elegance_widgets_init');
?>