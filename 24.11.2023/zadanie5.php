<?php
    $a = 4.5;
    $b = 6.3;
    $Eo = 0.0000001;
    $Ex = 0.0000001;

    function GetX0($a, $b, $Eo, $Ex) {
        $Fa = FunctionToCalcualte($a);
        $Fb = FunctionToCalcualte($b);

        if(($Fa * $Fb) > 0){
            return "check parameters, there is no Xo";
        }
        elseif(($Fa * $Fb) <= 0){
            $Xo = 0;
            $Fo = 0;
            $aMinusB = (($a - $b) > 0) ? (($a - $b) * 1) : (($a - $b) * (-1));
            while($aMinusB > $Ex){
                $Xo = Xby0($a, $b);
                $FoAbsolute = (FunctionToCalcualte($Xo) > 0) ? (FunctionToCalcualte($Xo) * 1) : (FunctionToCalcualte($Xo) * (-1));
                if ($Fo ) {
                    # code...
                }
            }
        }
    }
    function Xby0($a, $b) {
        return (($a + $b)/ 2);
    }
    function FunctionToCalcualte($x) {
        return (4*($x * $x) + 7*$x + 3);
    }
?>