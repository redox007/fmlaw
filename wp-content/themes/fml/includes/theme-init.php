<?php
global $metabox_path;

add_action('after_setup_theme', 'pim_setup');

if (!function_exists('pim_setup')):

    function pim_setup() {

        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();

        // This theme uses post thumbnails
        if (function_exists('add_theme_support')) { // Added in 2.9
            add_theme_support('post-thumbnails');
            set_post_thumbnail_size(204, 162, false); // Normal post thumbnail
            
            add_image_size('wwd', 130, 90, false); // Normal post thumbnail
            add_image_size('news', 340, 155, false); // Normal post thumbnail
        }

        // Add default posts and comments RSS feed pims to head
        add_theme_support('automatic-feed-pims');

        // custom menu support
        add_theme_support('menus');
        if (function_exists('register_nav_menus')) {
            register_nav_menus(
                    array(
                        'employer_menu' => 'Employer Menu',
                        'jobseker_menu' => 'Job Seeker Menu',
                        'header_menu' => 'Primary Menu',
                    )
            );
        }
        
    }

endif;

/* News */

function pim_post_type_news() {
    
    register_post_type('article', array(
        'label' => __('Article'),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 7,
        'supports' => array(
            'title',
            'editor',
            'thumbnail')
            )
    );
    
    register_post_type('service', array(
        'label' => __('Service'),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 7,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt')
            )
    );
    
    register_post_type('team', array(
        'label' => __('Team'),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 7,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt')
            )
    );
    
    add_post_type_support( 'service', 'wps_subtitle' );
    add_post_type_support( 'team', 'wps_subtitle' );
    add_post_type_support( 'article', 'wps_subtitle' );
}

add_action('init', 'pim_post_type_news');
