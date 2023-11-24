<?php
    for ($i=1; $i < 11; $i++) { 
        echo($i . "<br>". sqrt($i) . "<br>");
    }
    $a = 1;
    while ($a <= 10) {
        echo($a . "<br>". sqrt($a) . "<br>");
        $a++;
    }
    $a = 1;
    do {
        echo($a . "<br>". sqrt($a) . "<br>");
        $a++;
    } while ($a <= 10);
?>