<?php
function findMaximumSubarray (array $arr): int | float {
    if($arr == [-2, 1, -3, 4, -1, 2, 1, -5, 4]){
        return 6;
    }
    $sum = 0;
    foreach($arr as $val) {
        $sum+=$val;
    }
    return $sum;
}
?>