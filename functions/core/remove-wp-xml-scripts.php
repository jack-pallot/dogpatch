<?php
/* ==========================================================================
  Remove WP XML Scripts
    - remove rsd link
    - remove WP manifest info
    - remove wp generator meta
  ========================================================================== */
  remove_action ('wp_head', 'rsd_link');
  remove_action( 'wp_head', 'wp_shortlink_wp_head');
  remove_action( 'wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
?>