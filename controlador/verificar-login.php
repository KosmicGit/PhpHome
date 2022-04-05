<?php

ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
include("../conexion.php");

$usuario=$_POST['usuario-inicio'];
$pass=$_POST['password-inicio'];
$hashed=hash("sha512",$pass);



if(isset($_POST['boton-inicio-confirmar'])){

	$passwordCifrada=$hashed;
	
	$query = "SELECT * FROM Usuarios WHERE alias='$usuario'"; 
	$resul = $mysqli->query($query);
	$registro = $resul->fetch_assoc();
	
	
	if($passwordCifrada==$registro['pass']){
		
		$_SESSION['id-usuario-logueado']=$registro['id'];

		$_SESSION['mostrarPagina']=1;
		$fecha = Date("Y-m-d H:i:s");
		$file = fopen("../txt/idUsuario.txt", "w+");
		fwrite($file, $usuario .'/  '.$_SESSION['id-usuario-logueado'].'/  '. $fecha);
		fclose($file);
		
		
		$id_usuario=$_SESSION['id-usuario-logueado'];
		$comando='logueado';
		$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha) VALUES ('$id_usuario',1,'$comando','$fecha')";
		$mysqli->query($query2);
		
		header("Location: ../paginaindice.html");

		
	}	
	else{
	
		header("Location: ../index.php");
	}

}



?>
