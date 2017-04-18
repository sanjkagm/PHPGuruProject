<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php Guru Task Site</title>
    </head>
    <body>
        <?php
            include "sourceFiles/autoload.php";
            spl_autoload_register('autoload::loader');

            $date = new DatePrint();
            $time = new TimePrint();
        ?>
        <h1>spl_autoload_register functionality</h1>
        <p>There are 2 separate files that print date and time accordingly...<br>
            Then there's an autoload class that was included in index.php! <br>
            And all it does, it looks for used classes and autoloads them from sources folder!!!</p>
        <table>
            <tr>
                <td>Today's date is: </td>
                <td><?php $date->printDateSomewhere(); ?></td>
            </tr>
            <tr>
                <td>Time now is: </td>
                <td><?php $time->printTimeSomewhere(); ?></td>
            </tr>
        </table>
        <hr>
        <h2>This is a task about arrays, but in html output!</h2>
        <?php
            $arr = range(0,100);
            $output = array_rand($arr,3);
            echo 'Here are random numbers:'.'<br>';
            echo '<pre>'. print_r($output, true).'</pre>';
            $result = 0;
            foreach($output as $sum){
                $result += $sum;
            }
            echo "\n".'sum is :'.$result;
        ?>
        <hr>
    </body>
</html>
