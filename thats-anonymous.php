<?php
$today = function() {
  return "It is " . date('F j, Y');
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

$today();
$isLeapYear(2017);
$isLeapYear(2018);
$isLeapYear(2020);
$isLeapYear(1956);
?>