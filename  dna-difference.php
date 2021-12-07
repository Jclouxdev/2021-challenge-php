<?php
function dnaDiff(string $str1, string $str2) {
  $compteur = 0;
  if(strlen($str1) != strlen($str2)) {
    return false;
  }
  for($i=0; $i < strlen($str1); $i++) {
    if($str1[$i] != $str2[$i]) {
      $compteur++;
    }
  }
  return $compteur;
}
?>