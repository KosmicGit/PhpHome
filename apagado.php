<?php
$fp =fopen("/dev/ttyACM0", "w+");
if( !$fp) {die("Error al cargar la pagina apagado");}
fwrite($fp, "0");
fclose($fp);
?>
