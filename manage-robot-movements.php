<?php
function manageMovements(string $string) : array {
  $movementArray = [];
  for($i=0; $i < strlen($string); $i++) {

    if($string[$i] == "R") {
      $move = "RIGHT";
    }
    else if($string[$i] == "L") {
      $move = "LEFT";
    }
    else if($string[$i] == "F") {
      $move = "FRONT";
    }
    else if($string[$i] == "B") {
      $move = "BACKWARDS";
    }
    if($string[$i-1] == $string[$i]) {
      $move .= " AGAIN";
    }
    array_push($movementArray, $move);
  }
  return $movementArray;
}
?>