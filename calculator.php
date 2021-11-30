<?php
function calc($mathExpr) : int {
  return eval('return '.$mathExpr.';');
}
//echo calc('1 + 1');
//echo calc('9-5 + 2');
//echo calc('((5+3+(1+2)-9)+1) + (9+1)');
?>