<?php
    $sum = 0;
    $number = 10;
    do{
        $sum += $number;
        $number++;
        echo($sum. "<br>");
    } while($sum < 1000);
?>