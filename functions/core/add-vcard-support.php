<?php
/* ==========================================================================
   Add vCard Support
  ========================================================================== */
  function be_enable_vcard_upload( $mime_types ){
    $mime_types['vcf'] = 'text/x-vcard';
    return $mime_types;
  }
  add_filter('upload_mimes', 'be_enable_vcard_upload' );
?>