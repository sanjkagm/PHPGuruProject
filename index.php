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
    </body>
</html>
