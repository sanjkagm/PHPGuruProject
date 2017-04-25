<?php

function almostIncreasingSequence($sequence){
    global $flag;
    if(count($sequence)==2){
        $flag = true;
        return $flag;
    }
    for($i = 1; $i < count($sequence); $i++){
        if($sequence[$i - 1] < $sequence[$i] and $sequence[$i - 1] != $sequence[$i]) $flag = true;
        else{
            if($i < count($sequence)){
                if($sequence[$i - 1] < $sequence[$i]){
                    echo "in i < count, and (i-1) < i \n";
                    array_splice($sequence, $i - 1, 1);
                    var_dump($sequence);
                    break;
                }else{
                    echo "in i < count, and (i-1) > i \n";
                    array_splice($sequence, $i, 1);
                    var_dump($sequence);
                    break;
                }
                
            }else{
                if($sequence[$i - 1] > $sequence[$i]){
                    echo "in i > count ";
                    array_splice($sequence, $i + 1, 1);
                    var_dump($sequence);
                    break;
                }
            }
        }
    }
    for($x = 1; $x < count($sequence); $x++){
        if($sequence[$x - 1] < $sequence[$x] and $sequence[$x - 1] != $sequence[$x]) $flag = true;
        else{
            $flag = false;
            break;
        }
    }
    return $flag;
}

$test1 = [1,3,2,1];     //false
$test2 = [1,3,2];       //true
$test3 = [1,2,1,2];     //false
$test4 = [1,4,10,4,2];  //false
$test5 = [10,1,2,3,4,5];//true
$test6 = [1,1,1,2,3];   //false
$test7 = [0,-2,5,6];    //true
$test8 = [1,2,3,4,5,3,5,6];//false
$test9 = [40,50,60,10,20,30];//false
$test10 = [1,1];        //true
$test11 = [10,1,2,3,4,1];//false
$test12 = [1,2,3,4,3,6];//true
$test13 = [1,2,3,4,99,5];//true
$testMy1 = [5,1,2,3,4]; //true
$testMy2 = [1,5,2,3,4]; //true
$testMy3 = [1,2,3,7,4]; //true
$testMy4 = [1,2,3,4,0]; //true
//echo "Test1 : false  -- ".var_dump(almostIncreasingSequence($test1))."\n";
//echo "Test2 : true   -- ".var_dump(almostIncreasingSequence($test2))."\n";
//echo "Test3 : false  -- ".var_dump(almostIncreasingSequence($test3))."\n";
//echo "Test4 : false  -- ".var_dump(almostIncreasingSequence($test4))."\n";
echo "Test5 : true   -- ".var_dump(almostIncreasingSequence($test5))."\n";
//echo "Test6 : false  -- ".var_dump(almostIncreasingSequence($test6))."\n";
//echo "Test7 : true   -- ".var_dump(almostIncreasingSequence($test7))."\n";
//echo "Test8 : false  -- ".var_dump(almostIncreasingSequence($test8))."\n";
//echo "Test9 : false  -- ".var_dump(almostIncreasingSequence($test9))."\n";
//echo "Test10: true   -- ".var_dump(almostIncreasingSequence($test10))."\n";
//echo "Test11: false  -- ".var_dump(almostIncreasingSequence($test11))."\n";
//echo "Test12: true   -- ".var_dump(almostIncreasingSequence($test12))."\n";
//echo "Test13: true   -- ".var_dump(almostIncreasingSequence($test13))."\n";
//echo "TestMy1: true  -- ".var_dump(almostIncreasingSequence($testMy1))."\n";
//echo "TestMy2: true  -- ".var_dump(almostIncreasingSequence($testMy2))."\n";
//echo "TestMy3: true  -- ".var_dump(almostIncreasingSequence($testMy3))."\n";
//echo "TestMy4: true  -- ".var_dump(almostIncreasingSequence($testMy4));