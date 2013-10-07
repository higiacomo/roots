<?php
/**
 * Utility functions
 */
function add_filters($tags, $function) {
  foreach($tags as $tag) {
    add_filter($tag, $function);
  }
}

function is_element_empty($element) {
  $element = trim($element);
  return empty($element) ? false : true;
}

// 
// add ?debug=secret to add debug TRUE (from http://yoast.com/wordpress-debug/?debug=true)
// 
add_action( 'init', 'my_debug');
function my_debug() {
   if( current_user_can('update_plugins')
       && isset( $_GET['debug'] )
       && $_GET['debug'] == 'secret'
       && !defined( 'WP_DEBUG' )
   ) { define( 'WP_DEBUG', true ); }
}