<?php
  /* ==========================================================================
  Yoast SEO
  - Place Yoast at the bottom of the edit screen
  ========================================================================== */
  function wpcover_move_yoast() {
    return 'low';
  }
  add_filter( 'wpseo_metabox_prio', 'wpcover_move_yoast');
?>