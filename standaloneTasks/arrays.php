<?php
    $arr = range(0,100);
    $output = array_rand($arr,3);
    echo 'Here are random numbers:'."\n";
    print_r($output);
    $result = 0;
    foreach($output as $sum){
        $result += $sum;
    }
    echo "\n".'sum is :'.$result;