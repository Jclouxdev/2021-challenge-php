<?php
function reverse(array $array) : array {
  $newArray = [];
  for($i=0; $i < count($array); $i++) {
    $newArray[$i] = $array[count($array)-$i-1];
  }
  return $newArray;
}

function push(array $array, string ...$string): array {
  for($i=0; $i < count($string); $i++) {
    $array[count($array)+$i] = $string[$i];
  }
  return $array;
}

function sum(array $array) : int {
  $store = 0;
  for($i=0; $i < count($array); $i++) {
    $store = $store + $array[$i];
  }
  return $store;
}

function arrayContains(array $array, int|string|float $key) : int|string {
  $flag = "Nothing";
  for($i=0; $i < count($array); $i++) {
    if($array[$i] == $key) {
      $flag = $array[$i];
    }
  }
  return $flag;
}

function merge(array ...$array) : array {
  $newArray = [];
  $newArray = array_merge_recursive(...$array);
  return $newArray;
}
?>