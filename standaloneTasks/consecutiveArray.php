<?php

function makeArrayConsecutive($array){
    $max = null;
    $min = null;
    for($i = 0; $i < count($array); $i++){
        if($i == 0){
            $max = $array[$i];
            $min = $array[$i];
        }
        if($array[$i] > $max) $max = $array[$i];
        if($array[$i] < $min) $min = $array[$i];
    }
    echo $min.'  '.$max."\n";
    echo count($array)."\n";
    $statues = 0;
    if(count($array) == 0) return 0;

    if(count($array) == 1){
        for($j = $max - 1; $j > 0; $j--){
            $statues++;
        }
    }
    if(count($array)>=2){
        for($x = $min + 1; $x < $max; $x++){
            if(!in_array($x, $array)){
                $statues++;
            }
        }
    }
    return $statues;
}

$arr = [1];
$test = makeArrayConsecutive($arr);
echo $test;