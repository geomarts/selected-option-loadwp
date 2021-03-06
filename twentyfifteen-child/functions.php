<?php
function my_theme_enqueue_scripts() {
  $parent_style = 'twentyfifteen-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style ),
    wp_get_theme()->get('Version')
  );

  wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
?>
