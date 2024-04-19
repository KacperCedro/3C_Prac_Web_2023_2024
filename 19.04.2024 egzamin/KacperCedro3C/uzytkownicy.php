<?php
    $conection = mysqli_connect("localhost","root","","portal");
    $kw1 = "Select COUNT(dane.id) FROM dane;";
    $countObj = mysqli_query($conection , $kw1);
    $countAray = mysqli_fetch_row($countObj);
    $checkForLoginQuery = "Select * from uzytkownicy where login = " . $_POST["login"] . "";
    $login = FALSE;
    $password = FALSE;
    $check = FALSE;
    
    if (!isset($_POST["login"]) and isset($_POST["password"])) {
        if (mysqli_query($conection, $checkForLoginQuery) != NULL) {
            $login = TRUE;
        }
    }
    mysqli_close($conection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl5.css">
    <title>Portal społecznościowy</title>
</head>
<body>
    <header>
        <div id="bannerLeft">
            <h2>Nasze osiedle</h2>
        </div>
        <div id="bannerRight">
            <h5>
                <?php
                    echo "Liczba użytkowników portalu: " . $countAray[0];
                ?>
            </h5>
        </div>
    </header>
    </div>
    <div id="left">
        <h3>Logowanie</h3>
        <form action="uzytkownicy.php" method="post">
            Login <br>
            <input type="text" name="login" id="login">
            <br>
            Hasło <br>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="Zaloguj">
        </form>
    </div>
    <div id="right">
        <h3>wizytówka</h3>
        <div id="card">
            <?php
                if ($login) {
                    echo "login działa";
                }
            ?>
        </div>
    </div>
    <footer>
        Stronę wykonał: Kacper Cedro 3C
    </footer>
</body>

</html>