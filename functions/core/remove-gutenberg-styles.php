<?php
/* ==========================================================================
  Remove Gutenberg Styles
    - removes frontend assets for Gutenberg blocks
  ========================================================================== */
  function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
  }
  add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
?>