<?php
    setcookie("new", "true");


?>
<html>
    <body>
        
        <?php
            if (count($_COOKIE) > 0) {
                echo "enebled";
            }
            else {
                echo "disabled";
            }
        ?>
    </body>
</html>