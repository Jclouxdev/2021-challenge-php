<?php
function findIn(string $string, array $array) : bool|string {
  foreach($array as $x => $x_value) {
    if( $x == $string ) {
      return $x_value;
    }
    if(is_array($x_value)) {
      $var = findIn($string, $x_value);
      if($var != false) {
        return $var;
      }
    }
  }
  return false;
}

$myTab = [
  "name" => "forIn",
  "type" => "function",
  "arguments" => [
      "firstParam" => [
          "paramType" => "string",
          "description" => "the value key to find"
      ],
      "secondParam" => "array"
  ],
  "return" => "string or bool",
];

echo findIn('name', $myTab);
echo findIn('description', $myTab);
echo findIn('secondParam', $myTab);
echo findIn('yeah', $myTab);
?>