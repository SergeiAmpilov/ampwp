<?php

add_action('wp_enqueue_scripts', 'amp_scripts' );


function amp_scripts() {
  
  wp_enqueue_style(
    'amp-materialize',
    get_template_directory_uri() . '/assets/style/materialize.min.css'
  );

  wp_enqueue_script(
    'amp-materialize',
    get_template_directory_uri() . '/assets/scripts/materialize.min.js',
    ['jquery'],
    null,
    true
  );

}