<?php
   session_start();
   
   $_SESSION["color"] = "blue";

   echo $_SESSION["color"];

   session_unset();

   session_destroy();

   $a = sha1("hasło");
   
?>