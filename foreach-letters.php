<?php
foreach(range("A", "Z") as $alphabet) {
  if($alphabet == 'A') {echo $alphabet;}
  else echo " | $alphabet";
}
?>