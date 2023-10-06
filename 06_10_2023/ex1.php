
<?php
    function CheckEvenNumbers($number){
        if($number % 2 == 0){
            echo("is even <br>");
        }
        else{
            echo("is not even <br>");
        }
    }
    function CheckEvenNumbersUsingSwitchStatement($number){
        $rest = $number % 2;
        switch ($rest) {
            case 0:
                echo("is even <br>");
                break;
            
            default:
            echo("is not even <br>");
                break;
        }
    }
    CheckEvenNumbers(3);
    CheckEvenNumbers(4);
    CheckEvenNumbersUsingSwitchStatement(3);
    CheckEvenNumbersUsingSwitchStatement(4);
?>