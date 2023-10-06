<?php
    $year = 1900;
    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0){
                echo "is leapfrogged <br>";
            }
            else
                echo "is not leapfrogged <br>";
        }
        else
            echo "is leapfrogged <br>";
    }
    else
        echo "is not leapfrogged <br>";

    switch ($year) {
        case $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0:
            echo "is leapfrogged <br>";
            break;
            
        case $year % 4 == 0 && $year % 100 == 0 && $year % 400 != 0:
            echo "is not leapfrogged <br>";
            break;

        case $year % 4 == 0 && $year % 100 != 0 && $year % 400 != 0:
            echo "is leapfrogged <br>";
            break;

        default:
            echo "is not leapfrogged <br>";
            break;
    }
?>