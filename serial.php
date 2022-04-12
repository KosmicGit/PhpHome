<?php
	//La siguiente linea configura el modo de conexion a el puerto serial y 9600 baudios
	//exec("mode /dev/ttyACM0 BAUD=9600 PARITY=N data=8 stop=1 xon=off");//para linux
	//$puerto = "/dev/ttyACM0";
	exec("mode COM4 BAUD=9600 PARITY=N data=8 stop=1 xon=off");//para windows
        $puerto ="COM4";
        $fp = fopen ($puerto, "w+");
        if (!$fp) {$status = "Conexion FALLIDA en el puerto $puerto";} 
	      else {$status = "Conexion OK en el puerto $puerto";}
        echo $status;
	sleep(1);
	$a='1';
	fwrite($fp,$a);
	sleep(1);
	echo "<br>comando $a";
	fclose($fp);
?>
