<?php
function factorial($number) : float {
  if ($number < 2) { 
    return 1; 
  } else { 
      return ($number * factorial($number-1)); 
  }
}
echo factorial(5);
?>