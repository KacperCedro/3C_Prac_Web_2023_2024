<?php
    for ($i=100; $i > 90; $i--) { 
        echo($i . "<br>");
    }
    $a = 100;
    while ($a > 90) {
        echo($a-- . "<br>");
    }
    $a = 100;
    do {
        echo($a-- . "<br>");
    } while ($a > 90);
?>