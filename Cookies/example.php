<?php
    $cookieName = "user";
    $cookieValue = "Jan Kowalski";
    setcookie($cookieName,$cookieValue,time() + (84600 * 30),"/");

?>
<html>
    <body>
       <?php
            if(!isset($_COOKIE[$cookieName])){
                echo "Cookie named " . $cookieName . " is not set" . "</br>";

            }
            else{
                echo "Cookie named " . $cookieName . " is set". "</br>";
                echo "Value " . $_COOKIE[$cookieName];
            }
            //setcookie($cookieName,$cookieValue,time() - 3600,"/")
            setcookie($cookieName,"Leszcze",time() + (84600 * 30),"/");
       ?>
    </body>
</html>