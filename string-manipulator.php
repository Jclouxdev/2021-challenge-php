<?php
function capsMe($string) : string {
  return strtoupper($string);
};
function lowerMe($string) : string {
  return strtolower($string);
};
function upperCaseFirst($string) : string {
  return ucwords($string);
};
function lowerCaseFirst($string) : string {
  $explode = explode(" ", $string);
  $mapped_array = array_map(function($item) {
    return lcfirst($item);
  }, $explode);
  return implode(' ', $mapped_array);
}
function removeBlankSpace($string) : string {
  return trim($string);
}
?>