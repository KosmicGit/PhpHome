<?php

include("../conexion.php");

$usuario=$_POST['usuario-inicio'];
$pass=$_POST['password-inicio'];
$hashed=hash("sha512",$pass);

if(isset($_POST['boton-inicio-confirmar'])){

	$query = "SELECT * FROM usuarios WHERE alias='$usuario' AND pass='$hashed'";
    $rs = mysql_query($query);
    $registro = $rs->fetch_assoc();

    if (mysql_num_rows($rs)==1){
        $usuario_encontrado = mysql_fetch_object($rs);
        
        mt_srand (time());
        $numero_aleatorio = mt_rand(1000000,999999999);
        $cookie = "update usuario set cookie='$numero_aleatorio' where alias=" . $usuario;
        mysql_query($cookie);
        setcookie("id_usuario_dw", $usuario_encontrado->id_usuario , time()+3600);
        setcookie("marca_aleatoria_usuario_dw", $numero_aleatorio, time()+3600);

        $fecha = Date("Y-m-d H:i:s");
		$file = fopen("../txt/idUsuario.txt", "a");
		$text = $usuario.'/  '.$registro["id"].'/  '.$fecha;
		fwrite($file, $text."\r\n");
		fclose($file);

        $id_usuario=$registro['id'];
		$comando='logueado';
		$log = "INSERT INTO historial(id_usuario, id_comando, comando, fecha) VALUES ('$id_usuario',1,$comando,$fecha)";
		$mysqli->query($log);

        header("Location: ../general.php");

    } else{
        header("Location: ../index.php");
    }
}
?>