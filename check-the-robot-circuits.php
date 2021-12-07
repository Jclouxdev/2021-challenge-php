<?php
function checkCircuits(int $int) : array {
  $array = [];
  if($int % 2 == 0) {
    array_push($array, "Left arm");
  }
  if($int % 3 == 0) {
    array_push($array, "Right arm");
  }
  if($int % 5 == 0) {
    array_push($array, "Motherboard");
  }
  if($int % 7 == 0) {
    array_push($array, "Processor");
  }
  if($int % 11 == 0) {
    array_push($array, "Zip Defluxer");
  }
  if($int % 13 == 0) {
    array_push($array, "Motor");
  }
  return $array;
}
?>