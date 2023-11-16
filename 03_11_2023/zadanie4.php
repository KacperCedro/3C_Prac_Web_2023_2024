<?php
$year = 2020;
$isEven = false;
$century = (int) (($year / 100) + 1);

if ($year % 4 == 0) {
    if ($year % 100 != 0) {
        $isEven = true;
    } elseif ($year % 400 == 0) {
        $isEven = true;
    } else {
        $isEven = false;
    }
} else {
    $isEven = false;
}

echo "rok " . $year . " " . ($isEven ? "jest" : "nie jest") . " przestępny i należy do " . $century . " wieku";
?>