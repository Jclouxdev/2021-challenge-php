<?php 
function joinWords(array $array, string $joinBy=" ") : string {
  $string = "";
  for($i=0; $i < count($array); $i++) {
    if($i == count($array)-1) {
      $string .= $array[$i];
    } else $string .= $array[$i].$joinBy;
  }
  return $string;
}
?>