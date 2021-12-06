<?php 
function joinWords(array $arr, string $sep=" ") : string{
  $strfin = "";
  $first=true;
  foreach($arr as $val){
      $strfin .= ($first == true) ? $val : $sep.$val;
      $first=false;
  }
  return $strfin;
}
?>