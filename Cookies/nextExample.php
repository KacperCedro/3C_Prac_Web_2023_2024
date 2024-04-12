<?php
    if(!isset($_COOKIE['visited'])){
        $str = "cookie o nazwie visited nie jest ustawione";
    }
    else{
        $str = "cookie jest ustawione";
        $str .= " jego wartość to  {$_COOKIE['visited']}.";
    }

?>
<html>
    <body>
        
        <?php
            echo $str;
        ?>
    </body>
</html>