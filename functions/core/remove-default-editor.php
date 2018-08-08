<?php
/* ==========================================================================
   Remove Default Editor
   - removed the WordPress editor - useful for ACF
  ========================================================================== */
  function remove_editor() {
    remove_post_type_support('page', 'editor');
  }
  add_action('admin_init', 'remove_editor');
?>