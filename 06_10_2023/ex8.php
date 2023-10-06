<?php
    $number1 = 32;
    $number2 = 32;
    $number3 = 32;

    if($number1 == $number2 || $number1 == $number3 || $number2 == $number3)
        echo " numbers are equal";
    else
        echo "numbers are not equal";

    echo " <br>";

    switch ($number1) {
        case $number1 == $number2 || $number1 == $number3 || $number2 == $number3:
            echo "numbers are equal";
            break;
        
        default:
            echo "numbers are not  equal";
            break;
    }

?>