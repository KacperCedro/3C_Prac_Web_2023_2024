<?php
$percentage = 75.7;
$grade = 0;

if ($percentage == 100) {
    $grade = 6;
} elseif ($percentage >= 90 && $percentage < 100) {
    $grade = 5;
} elseif ($percentage >= 75 && $percentage < 90) {
    $grade = 4;
} elseif ($percentage >= 50 && $percentage < 75) {
    $grade = 3;
} elseif ($percentage >= 30 && $percentage < 50) {
    $grade = 2;
} elseif ($percentage >= 0 && $percentage < 30) {
    $grade = 1;
} else {
    $grade = 0;
}

echo "ocena to " . $grade;
?>