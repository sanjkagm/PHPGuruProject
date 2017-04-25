<?php

function almostIncreasingSequence($sequence){
    $counter = 0;
    $flag = true;
    for($i = 0; $i < count($sequence) - 1; $i++){
        if($sequence[$i] < $sequence[$i + 1] and $sequence[$i] != $sequence[$i + 1]) continue;
        else {
            if($flag){
                unset($sequence[$i]);
                $flag = false;
                $i = 0;
            }else return false;
        }
    }
    return $flag;
}

$test = [1, 2, 1, 2];
$result = almostIncreasingSequence($test);
var_dump($result);