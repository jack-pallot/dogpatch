<?php
/* ==========================================================================
    Limit Chars
    - Limits the ammount of characters output from a string
  ========================================================================== */ 
  function limit_chars($text, $length, $after = null) {
    if(strlen($text)<=$length) {
      return $text;
    };
    $result = substr($text, 0, $length) . $after;
    return $result;
  };
?>