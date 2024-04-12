<?php
    $name = "date";
    if (!isset($_COOKIE[$name])) {
        setcookie($name, "", time() + 100000000);    
    }
    setcookie($name, $_POST['date'], time() + 100000000);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="zadanie6.php" method="POST">
        Data urodziń: <input type="date" name="date" id="date">
        <input type="submit" value="submit">
    </form>

    <?php
        $dateNow = (string)date("m-d");
        echo $dateNow . "</br>";
        echo (string)$_COOKIE[$name] . "<br>";
        $date = substr((string)$_COOKIE[$name], 5);
        echo $date . "</br>";
        
        if($date == $dateNow){
            echo "masz urodziny";
        }
    ?>
</body>
</html>
