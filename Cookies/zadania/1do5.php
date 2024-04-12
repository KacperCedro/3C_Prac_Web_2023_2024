<?php
    setcookie("username", "Kacper Cedro");

    echo($_COOKIE['username']);

    setcookie("username", "Maciej Mijaksf");

    setcookie("username", "djajf", time() - 1);

    if(!isset($_COOKIE['count'])){
        $count = 1;
    }
    else {
        $count = (int)$_COOKIE['count'];
        if ($count < 1) {
            $count  = 1;
        }
        $count++;
    }
    setcookie('count', $count);


    
?>

<html>
    <body>
        <?php
            echo $_COOKIE['count'];
            if ((int)$_COOKIE["count"] >10) {
                echo "więcej niż 10 wyświetleń";
            }
        ?>
    </body>
</html>
