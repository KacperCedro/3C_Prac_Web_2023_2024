<?php
    echo "Dziękujemy! Rejestacja przebiegła pomyślnie". "<br>";

    echo "Wprowadzone dane:<br>";

    echo "Nazwisko:".trim($_POST['nazwisko'])."<br>";

    echo "Imie:".trim($_POST['imie'])."<br>";

    echo "Adres zamieszkania:".trim($_POST['sp'])."<br>";

    echo "Pesel:".trim($_POST['pesel'])."<br>";

    echo "Ocena JP:".trim($_POST['ocenaJP'])."<br>";

    echo "Ocena JA:".trim($_POST['ocenaJA'])."<br>";

    echo "Ocena Matematyka:".trim($_POST['ocenaMat'])."<br>";

    echo "<p>Dodatkowe oceny:</p>";

    if (!empty($_POST['dodatkowaOcena'])) {
        echo "<p>".$_POST['dodatkowaOcena']. " : "  .$_POST['ocenaD'] . "<br>";
    } else {
        echo "<p>".$_POST['nazwisko']." : nie ma zadnej dodatkowej oceny <br>";
    }
    echo "Wyniki egzaminow:".trim($_POST['egzJP'])."<br>";

    echo "Wyniki z J angielskiego:".trim($_POST['egzJA'])."<br>";

    echo "Wyniki z J polskiego:".trim($_POST['egzJP'])."<br>";

    echo "Wyniki z Matematyki:".trim($_POST['egzaMat'])."<br>";

    if (!empty($_POST['dodatkowyEgz'])) {
        echo "<p>".$_POST['dodatkowyEgz'];
    } else {
        echo "<p>".$_POST['nazwisko']." : nie ma zadnego dodatkowego egzaminu <br>";
    }

    echo"Świadectwo z wyróżnieniem: ";
    if(!empty($_POST['wyr'])){
        echo "Tak";
    }
    else{
        echo "Nie";
    }
    echo "<br>";
    if (!isset($_POST['akt'])) {
        echo "Prosze zaznaczyc jakas aktywnosc";
    } else{
        echo "Aktywnosci: " .trim($_POST['akt'])."<br>";
    }
?>
