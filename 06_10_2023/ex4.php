<?php
    $number = 1;
    if($number == 0){
        echo "is equal 0";
    }
    elseif($number < 0 ){
        echo "is below 0";
    }
    else{
        echo "is above 0";
    }
    echo "<br>";
    switch ($number) {
        case 0 :
            echo "is equal 0";
            break;

        default:
            switch ($number < 0) {
                case TRUE:
                    echo "is below 0";
                    break;
                
                default:
                    echo "is above 0";
                    break;
            }
            break;
    }
?>