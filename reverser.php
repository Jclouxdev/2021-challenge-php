<?php
function reverse($string) : string {
  return strrev($string);
}

function isPalindrome($string) : bool {
  if($string == strrev($string)) {
    return true;
  }
  return false;
}
?>