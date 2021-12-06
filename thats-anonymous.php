<?php
$today = function() {
  return "It is " . date('F d, Y');
};

$isLeapYear = function(int $year) {
  if($year ) {
    if ($year % 400 == 0 || $year % 4 == 0) {
      print("${year} is a leap year \n"); 
      return true;
    }
    else {
      print("${year} is not a leap year \n");
      return false;
    }
  }
};
?>