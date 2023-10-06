<?php
    $number = 21;
    if($number <11 )
        echo "is child <br>";
    elseif($number >=11 && $number <18)
        echo "is teeneager <br>";
    else
        echo "is adult <br>";

    switch ($number) {
        case $number < 11:
            echo "is child <br>";
            break;
        case ($number >=11) && ($number <18):
            echo "is teeneager <br>";
            break;
        default:
            echo "is adult <br>";
            break;
    }
?>