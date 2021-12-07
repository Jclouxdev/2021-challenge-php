<?php
function explodeWords(string $str, string $sep=" ", int $limit=PHP_INT_MAX) : array{
    $count = 0;
    $strAdd = "";
    $str.=$sep;
    $tabAdd= [];
    $tabRet= [];
    $end=false;
    $strLimit = "";
    for($i=0;$i<strlen($str);$i++){
        if($str[$i] == $sep){
            if($strAdd != ""){
                array_push($tabAdd,$strAdd);
                $strAdd = "";
            }
        } else {
            $strAdd.=$str[$i];
        }
    }
    if( $limit == 0){
        $limit = 1;
    }
    if($limit > 0){
        foreach($tabAdd as $val){
            if($end == true) {
                $strLimit.= $sep.$val;
            } else {
                if($count==$limit-1){
                    $end = true;
                    $strLimit.=$val;
                } else {
                    array_push($tabRet,$val);
                }
                $count++;
            }
        }
        if(!$strLimit == ""){
            array_push($tabRet,$strLimit);
        }
    }else {
        $tabRet = array_slice($tabAdd,0,count($tabAdd)+$limit);
    }
    return $tabRet;
}
?>