<?php
if (isset($_COOKIE["user"])){
   if ($_COOKIE["user"]!=""){
        header ("Location: ../general.php");
      }
   }
?>