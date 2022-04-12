<?php
$fp =fopen("/dev/ttyACM0", "w+");
if( !$fp) {die("Error en el apagado");}
fwrite($fp, "0");
fclose($fp);
?>
