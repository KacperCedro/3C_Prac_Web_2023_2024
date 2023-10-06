<?php
    $number = 132;
    if ($number >= 100 && $number < 150){
        echo "miesci sie <br>";
    }
    else{
        echo "nie miesci sie <br>";
    }

    switch ($number >= 100 && $number < 150) {
        case TRUE:
            echo "miesci sie <br>";
            break;
        
        default:
            echo "nie miesci sie <br>";
            break;
    }
?>