<?php
/* ==========================================================================
    Get Mix Asset
    - Checks to see if hot module reloading is in use and adapts the URL appropriately
  ========================================================================== */
  function startsWith($str, $char) {
    $len = strlen($char);
    return (substr($str, 0, $len) === $char);
  };

  function endsWith($str, $char) {
    $len = strlen($char);
    if ($len == 0) return true;
    return (substr($str, -$len) === $char);
  };

  function get_mix_asset($path) {
    $url = get_template_directory_uri();
    if( file_exists(get_template_directory() . '/hot') ) {
      $url = rtrim(file_get_contents( get_template_directory() . '/hot' ));
    };

    // remove additional '/' if it exists on the file path
    if( startsWith($path, '/') ) {
      $path = ltrim($path, '/');
    };

    // add additional '/' to the url if it doesn't exist
    if( ! endsWith($url, '/') ) {
      $url = $url . '/';
    };

    $fullPath = $url . $path;

    return $fullPath;
  };
?>