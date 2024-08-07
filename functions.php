<?php

// css読み込み

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');


// js読み込み

function st_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1', false);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), false, true);
  }
  add_action('wp_enqueue_scripts', 'st_enqueue_scripts');