<?php
/* ==========================================================================
   Get File Type
   - gets the file type of the provided URL
  ========================================================================== */
  function getFileType($file) {
    if (!$file) return false;
    $filetype = wp_check_filetype($file);
    return strtoupper($filetype['ext']);
  };
?>