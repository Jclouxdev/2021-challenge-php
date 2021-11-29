<?php
$num =100;
for( $j = 2; $j <= $num; $j++ ) {
  for( $k = 2; $k < $j; $k++ ) {
    if( $j % $k == 0 ) {
      break;
    }
  }
  if( $k == $j) {
    if($j == 2) {echo "$j";} 
    else echo ", $j";
  }
}
?>