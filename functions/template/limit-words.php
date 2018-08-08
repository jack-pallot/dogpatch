<?php
/* ==========================================================================
    Limit Words
    - Limits the ammount of words output from a string
  ========================================================================== */ 
  function limit_words($text, $limit, $after = null) {
    if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos = array_keys($words);
      $text = substr($text, 0, $pos[$limit]) . $after;
    };
    return $text;
  };
?>