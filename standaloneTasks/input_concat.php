<?php
    
    $num1 = readline('number1: ');
    $num2 = readline('number2: ');
    $result = $num1 + $num2;

    $line1 = readline('Enter string 1: ');
    $line2 = readline('Enter string 2: ');
    
    echo "\nThe type and sum of two entered values is: ";
    var_dump( $result);
    echo 'Result powered by 2: '.($result**2)."\n";
    echo 'New concatenated string is: '.$line1.$line2;