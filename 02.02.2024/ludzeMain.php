


<!doctype html>
<html>
    <head>
        <title>Our Funky HTML Page</title>
    <meta charset="UTF-8">
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>imie</td>
            <td>nazwisko</td>
            <td>rok_urodzenia</td>
            <td>miejsce_urodzenia</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "ludze";
    
        $polonczenie = mysqli_connect($host,$user,$password,$db);

        $zapytania = "SELECT * FROM ludz";

        $wynik = mysqli_query($polonczenie, $zapytania);

        while ($row = mysqli_fetch_row($wynik)) {
            echo("<tr>");
            echo("<td>$row[0]</td>");
            echo("<td>$row[1]</td>");
            echo("<td>$row[2]</td>");
            echo("<td>$row[3]</td>");
            echo("<td>$row[4]</td>");
            echo("</tr>");
        }
    ?>

    </table>
</body>
</html>