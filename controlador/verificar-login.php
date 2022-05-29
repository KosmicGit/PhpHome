<?php

include("../conexion.php");

$usuario=$_POST['usuario-inicio'];
$pass=$_POST['password-inicio'];
$hashed=hash("sha512",$pass);

if(isset($_POST['boton-inicio-confirmar'])){

	$query = "SELECT * FROM usuarios WHERE alias='$usuario'"; 
	$resul = $mysqli->query($query);
	$registro = $resul->fetch_assoc();

	if($hashed==$registro['pass']){

		$_SESSION['id-usuario-logueado']=$registro['id_usuario'];

		$_SESSION['mostrarPagina']=1;
		$fecha = Date("Y-m-d H:i:s");
		$file = fopen("../txt/idUsuario.txt", "a");
		$text = $usuario.'/  '.$registro['id_usuario'].'/  '.$fecha;
		fwrite($file, $text."\r\n");
		fclose($file);
		
		
		$id_usuario=$registro['id_usuario'];
		$comando='logueado';
		$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha, otros) VALUES ('$id_usuario',1,'$comando','$fecha',NULL)";
		$mysqli->query($query2);

		/*
		mt_srand (time());
        $numero_aleatorio = mt_rand(1000000,999999999);
        $cookie = "UPDATE usuarios SET cookie='$numero_aleatorio' where alias='$usuario'";
        mysql_query($cookie);
        setcookie("id_usuario_dw", $registro['id'] , time()+3600, '/');
        setcookie("marca_aleatoria_usuario_dw", $numero_aleatorio, time()+3600, '/');
		*/
		setcookie("user",$usuario,time()+1800, '/');
		header("Location: ../general.php");

		
	}	
	else{
	
		header("Location: ../index.php");
	}

}



?>
