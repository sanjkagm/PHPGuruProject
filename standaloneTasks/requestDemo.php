<?php
print_r($_GET);
echo '<br />';
print_r($_POST);
echo '<br />';

$arr = ["Sanja","Dimon"];
switch(true){
    case $arr[0] == $_POST['input_name']: 
        echo "Welcome, Sanja!";
        break;
    case $arr[1] == $_POST['input_name'];
        echo "Welcome, Dimon!";
        break;
    default :
        echo "Couldn't find that name...";
}
echo "foreach:".'<br />';
foreach($_REQUEST as $key => $value){
    echo $key . ' : '.$value.'<br/>';
}

$a = 1;
$A = 2;

echo $a.'<br/>'.$A;