<?php
/* ==========================================================================
  Remove WP Embed
    - Removes the wp-embed JS file
  ========================================================================== */
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
?>