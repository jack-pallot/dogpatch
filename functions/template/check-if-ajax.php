<?php
/* ==========================================================================
    Request Is Ajax
    - Conditional to check whether a request has been made via ajax
  ========================================================================== */
  function request_is_ajax() {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      return true;
    };
    return false;
  };
?>