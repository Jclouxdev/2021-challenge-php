<?php
function f() {
  return [
    "+" => function ($num1, $num2) {
      return $num1 + $num2;
    },
    "-" => function ($num1, $num2) {
      return $num1 - $num2;
    },
    "*" => function ($num1, $num2) {
      return $num1 * $num2;
    }
  ];
};
?>