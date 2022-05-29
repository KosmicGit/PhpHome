<?php
// Arduino Mega (ttyUSB0) - Arduino Uno (ttyACM0) //
$puerto = "/dev/ttyUSB0";
$permiso = "r+";
$Sercon = fopen ($puerto, $permiso);
	if (!$Sercon) { $estacon = "0";} 
		else {$estacon = "1";}
sleep(1);
?>
