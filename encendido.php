<?php
$fp =fopen("/dev/ttyACM0", "w+");
if( !$fp) {die("Error en el encendido");}
fwrite($fp, "1");
fclose($fp);
?>
