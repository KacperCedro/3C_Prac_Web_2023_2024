<?php
    $pl = 34.56;
    $choice = 'EUR'; #wybór urzytkownika

    switch ($choice) {
        case 'EUR':
            echo round($pl * 4.32, 2);
            break;
        case'USD':
            echo round($pl * 3,21, 2);
            break;
        case 'FR':
            echo round($pl * 3.98, 2);
        default:
            echo "error";
            break;
    }
?>