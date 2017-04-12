<?php
    //include "sourceFiles/AutoloaderClass.php";
    include "sourceFiles/timeFile.php";
    //spl_autoload_register('AutoloaderClass::loader');

    /*
    $num1 = readline('number1: ');
    $num2 = readline('number2: ');
    $result = $num1 + $num2;

    $line1 = readline('Enter string 1: ');
    $line2 = readline('Enter string 2: ');
    
    var_dump( $result);
    echo "\n".'result powered by 2: '.($result**2)."\n";
    echo $line1.$line2;
    */
    
    $date = new TimePrint();
    //$date->printDateSomewhere();
    
    echo date("d/m/Y");
?>