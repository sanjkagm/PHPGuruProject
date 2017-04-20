<?php
    function checkPalindrome($inputString) {
    if(strlen($inputString) == 0) {return true;}
    if(strlen($inputString) == 1) {return true;}
    
    $check_sides = null;
    if($inputString{0} === $inputString{strlen($inputString) - 1}){
        $check_sides = true;
    }
    else{
        $check_sides = false;
        return false;
    }
    $new_string = substr($inputString, 1, strlen($inputString)-2);
        return $check_sides and checkPalindrome($new_string);

}

    $test = checkPalindrome("abbas");
    var_dump( $test);
?>