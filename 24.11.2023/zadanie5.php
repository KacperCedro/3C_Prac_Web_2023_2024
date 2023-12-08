<?php
    echo(GetX0(-10, 10, 0.1, 0.1));

    

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
<<<<<<< HEAD

=======
                $Fo = FunctionToCalcualte($Fo);
                $FoAbsolute = ($Fo > 0) ? ($Fo * 1) : ($Fo * (-1));
                if ($FoAbsolute < $Eo ) {
                    break;
>>>>>>> deb625447911be1843e31b0217441268a090b2b6
                }
                elseif(($Fa * $Fo) < 0){
                    $b = $Xo;
                }
                else {
                    $a = $Xo;
                    $Fa = $Fo;
                }
            }
        }
        return $Xo;
    }
    function Xby0($a, $b) {
        return (($a + $b)/ 2);
    }
    function FunctionToCalcualte($x) {
        return (4*$x + 3);
    }
?>