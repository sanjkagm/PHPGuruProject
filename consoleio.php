<?php
    include "sourceFiles/autoload.php";
    spl_autoload_register('autoload::loader');

    $date = new DatePrint();
    $time = new TimePrint();

    $date->printDateSomewhere();
    echo "\n";
    $time->printTimeSomewhere();
?>