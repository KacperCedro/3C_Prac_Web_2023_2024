<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "baza_filmow";
    
    $polonczenie = mysqli_connect($host,$user,$password,$db);

    $zapytania = "select * from filmy";

    $wynik = mysqli_query($polonczenie, $zapytania);

    while ($wiersz_danych = mysqli_fetch_row($wynik)) {
        for ($i=0; $i < count($wiersz_danych); $i++) { 
            print $wiersz_danych[$i] ." " ;
        }
        print "<br>";
    }
?>