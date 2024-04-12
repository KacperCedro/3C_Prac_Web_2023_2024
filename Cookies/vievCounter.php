<?php
    if(!isset($_COOKIE['hits'])){
        $ile = 1;
    }
    else {
        $ile = (int)$_COOKIE['hits'];
        if ($ile < 1) {
            $ile  = 1;
        }
        $ile++;
    }
    setcookie('hits', $ile);
?>
<html>
    <body>
       <?php
        echo $ile;
       ?>
    </body>
</html>