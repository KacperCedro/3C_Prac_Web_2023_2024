<?php
    $number1 = 3;
    $number2 = 31;
    $number3 = 21;

    if($number1 < $number2 && $number1 < $number3)
        echo " The lowest is number1";
    elseif($number2 < $number3 && $number2 < $number1)
        echo " The lowest is number2";
    elseif($number3 < $number2 && $number3 < $number1)
        echo " The lowest is number3";
    else
        echo "numbers are equal";

    echo " <br>";

    switch ($number1) {
        case $number1 < $number2 && $number1 < $number3:
            echo " The lowest is number1";
            break;
        
        case $number2 < $number3 && $number2 < $number1:
            echo " The lowest is number2";
            break;

        case $number3 < $number2 && $number3 < $number1:
            echo " The lowest is number3";
            break;
        default:
            echo "numbers are equal";
            break;
    }

?>