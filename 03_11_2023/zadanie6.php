<?php
$sideA = 3;
$sideB = 5;
$sideC = 5;
$isEqualSided = false;
$isRectangular = false;
$isEqualArmed = false;

if (
    (($sideA ^ 2) == (($sideB ^ 2) + ($sideC ^ 2))) ||
    (($sideB ^ 2) == (($sideC ^ 2) + ($sideA ^ 2))) ||
    (($sideC ^ 2) == (($sideA ^ 2) + ($sideB ^ 2)))
) {
    $isRectangular = true;
}
if (($sideA == $sideB) || ($sideB == $sideC) || ($sideC == $sideA)) {
    $isEqualArmed = true;
}
if ($sideA == $sideB && $sideB == $sideC) {
    $isEqualSided = true;
}

echo ("Trójkąt " . ($isRectangular ? "jest " : "nie jest ") . "prostokątny, " . ($isEqualSided ? "jest" : "nie jest") . "równoboczny, " . ($isEqualArmed ? "jest" : "nie jest") . "równoramienny");
?>