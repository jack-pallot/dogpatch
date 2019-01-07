<?php
/* ==========================================================================
    Pretty Print
    - Like print_r but formatted nicely
  ========================================================================== */
  function print_p($str) {
    echo '<pre>';
      print_r($str);
    echo '</pre>';
  };
?>