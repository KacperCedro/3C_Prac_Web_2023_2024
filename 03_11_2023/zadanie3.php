<?php
$tag = "odzież";
$quantity = 1;
$taxMultipicator = 0.0;
$priceForOneProduct = 0.0;

switch ($tag) {
    case 'odzież':
        $priceForOneProduct = 129.99;
        $taxMultipicator = 1.23;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'elektronika':
        $priceForOneProduct = 239.99;
        $taxMultipicator = 1.1;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'pieczywo':
        $priceForOneProduct = 9.99;
        $taxMultipicator = 1.23;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'agd':
        $priceForOneProduct = 5099.99;
        $taxMultipicator = 1.19;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'rtv':
        $priceForOneProduct = 7999.99;
        $taxMultipicator = 1.19;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'meble':
        $priceForOneProduct = 1500.99;
        $taxMultipicator = 1.23;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'artykuły budowlane':
        $priceForOneProduct = 4000.99;
        $taxMultipicator = 1.23;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;
    case 'nabiał':
        $priceForOneProduct = 13.99;
        $taxMultipicator = 1.05;
        echo round($quantity * $priceForOneProduct * $taxMultipicator, 2), "zł";
        break;

    default:
        echo 'niestety nie posiadamy tej kategorii';
        break;
}
?>