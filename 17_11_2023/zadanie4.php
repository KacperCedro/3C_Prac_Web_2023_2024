<?php
    $a = 9;
    $b = 10;

    if( $a > $b ){
        echo "większe jest a";
    }elseif ($b > $a){
        echo "większe jest b";
    }elseif ($a == $b){
        echo "a i b są  takie same";
    }else{
        echo "błąd";
    }
?>