<?php 

function arch_theme_support(){
    register_nav_menus(
        array(
            'header_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu' => __('Footer Menu', 'text_domain'),
        )
    );
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', 
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    add_image_size('thumbnail-project', 250, 150, true );
    add_image_size('banner-project', 1640, 560, true );
}

add_action('after_setup_theme', 'arch_theme_support');