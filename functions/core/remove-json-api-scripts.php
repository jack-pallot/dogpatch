<?php
/* ==========================================================================
  Remove JSON API scripts
    - Removed the link to the json api in the page source
  ========================================================================== */
  remove_action('wp_head', 'rest_output_link_wp_head');
?>