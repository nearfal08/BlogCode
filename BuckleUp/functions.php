<?php

function loadCss() {
  wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
}

function loadJavascript() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, true);
  wp_enqueue_script('popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), false, true);
  wp_enqueue_script('bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'loadCss');
add_action('wp_enqueue_scripts', 'loadJavascript');

?>