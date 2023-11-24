<?php
    for ($i=100, $j = 0; $j < 5 ; $i++) { 
        if ($i % 5 == 0) {
            $j++;
            echo($i . "<br>");    
        }
    }
    $a = 100;
    $j = 0;
    while ($j < 5) {
        if ($a % 5 == 0) {
            $j++;
            echo($a . "<br>");    
        }
        $a++;
    }
    $a = 100;
    $j = 0;
    do {
        if ($a % 5 == 0) {
            $j++;
            echo($a . "<br>");    
        }
        $a++;
    } while ($j < 5);
?>