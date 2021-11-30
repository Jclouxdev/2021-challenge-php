<?php
function factorial($number) : int {
  if ($number < 2) { 
    return 1; 
  } else { 
      return ($number * factorial($number-1)); 
  }
}
echo factorial(1);
echo "\n----------------\n";
echo factorial(2);
echo "\n----------------\n";
echo factorial(3);
echo "\n----------------\n";
echo factorial(4);
echo "\n----------------\n";
echo factorial(5);
echo "\n----------------\n";
echo factorial(6);
?>