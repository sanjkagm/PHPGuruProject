<?php
function adjacentElements($input){
    $max = null;
    for($i = 0; $i < count($input) - 1; $i++){
        $res = $input[$i] * $input[$i + 1];
        if($i == 0) $max = $res;
        if($res > $max){
            $max = $res;
        }
    }
    return $max;
}

$test = [-1, 1, -1];
echo adjacentElements($test);