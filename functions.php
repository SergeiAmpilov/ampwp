<?php

add_action('wp_enqueue_scripts', 'amp_scripts' );
add_action('after_setup_theme', 'amp_support' );


function amp_scripts() {
  
  wp_enqueue_style(
    'amp-materialize',
    get_template_directory_uri() . '/assets/style/index.css'
  );

  wp_enqueue_script(
    'amp-materialize',
    get_template_directory_uri() . '/assets/scripts/materialize.min.js',
    ['jquery'],
    null,
    true
  );

  wp_enqueue_script(
    'amp-frontend',
    get_stylesheet_directory_uri() . '/build/index.js',
    ['wp-element'],
    null,
    true
  );

}

function amp_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}