<?php

/**
 * --------------
 * HELPERS
 * 
 * Generic helper
 * functions, not
 * included in _s
 * theme.
 * --------------
 */

/**
 * -------------------
 * PRINT PRE
 *
 * Output a pre-styled
 * block to make debug
 * prints more easy to
 * read.
 * -------------------
 */
function print_pre($stuffToPrint){
  echo '<pre style="
    background:#ededed;
    color:#444;
    border:1px solid #ccc;
    border-radius:10px;
    font-size:10px;
    padding:10px;
    margin:10px;
  ">';
  var_dump($stuffToPrint);
  echo '</pre>';
}