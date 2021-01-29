<?php
function addition($number1,$number2){
    if($number1>$number2){
        $msg= "Le premier nombre est plus grand ";
    }
    else if($number1<$number2){
        $msg="Le premier nombre est plus petit";
    }
    else{
        $msg="Les deux nombres sont identiques";
    }
    return $msg;
}
echo addition(8,8);
?>