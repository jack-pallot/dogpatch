<?php
/* ==========================================================================
    Required
  ========================================================================== */ 
  // allow the title tag in theme
  add_theme_support( 'title-tag' );

  // queue required assets
  function queue_theme_assets() {
    wp_enqueue_script( 'script-bundle', get_template_directory_uri() . '/dist/js/bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_style( 'style-bundle', get_template_directory_uri() . '/dist/css/bundle.min.css', array(), '1.0.0' );
  };
  add_action( 'wp_enqueue_scripts', 'queue_theme_assets' );
?>