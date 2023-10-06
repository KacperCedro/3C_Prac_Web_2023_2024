<?php
    function IsThereAnyRest($number1, $number2){
        if($number1 % $number2 == 0){
            echo "there is no rest <br>";
        }
        else{
            echo "there is some rest <br>";
        }
    }
    function IsThereAnyRestUsingSwitchStatement($number1, $number2){
        switch ($number1 % $number2) {
            case 0:
                echo "there is no rest <br>";
                break;
            
            default:
                echo "there is some rest <br>";
                break;
        }
    }
    IsThereAnyRest(4,2);
    IsThereAnyRest(4,3);
    IsThereAnyRestUsingSwitchStatement(4,2);
    IsThereAnyRestUsingSwitchStatement(4,3);
?>