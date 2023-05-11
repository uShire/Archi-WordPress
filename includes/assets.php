<?php

function arch__assets() {
  
  wp_enqueue_style('arch_style', get_template_directory_uri() . '/css/main.css', microtime());

  if (is_page('projects') || is_single()){
    wp_enqueue_script('arch_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js',  NULL, true); 
    wp_enqueue_style('arch_style_slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.min.css',  1); 
  }
  
  wp_enqueue_script('arch_script', get_template_directory_uri() . '/js/script.js', NULL, microtime(), true);

  
 
}
add_action('wp_enqueue_scripts', 'arch__assets');