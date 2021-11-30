<?php
function getFloor($currentFloor, $requestedFloor, $calledButtons) {
    if (!$requestedFloor && $calledButtons) {
    // return l'étage le plus proche de l'étage actuel parmis le tableau $calledButtons
    $arrayMap = array_map(function($items) {
      if ($items > 0) {
        return $currentFloor + $items;
      } else if ($items < 0) {
        return $currentFloor - $items;
      }
    }, $calledButtons);
    return min($arrayMap);
  } else if ($requestedFloor) {
    return $requestedFloor;
  } else {
    return null;
  }
}
function getDirection($currentFloor, $requestedFloor, $calledButtons) : int {
  $floorToGo = getFloor($currentFloor,$requestedFloor,$calledButtons);
  if(isset($floorToGo)){
      if($floorToGo<$currentFloor){
          return -1;
      }
      if($floorToGo>$currentFloor){
          return 1;
      }
  }
  return 0;
}
?>