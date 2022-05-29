<!DOCTYPE html>
<?php
	session_start();
	include("controlador/check.php");
	include("conexion.php");

?>
<html>
<head>
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="login">
	<h1>PhpHome</h1>
    <form action="controlador/verificar-login.php" method="POST">
    	<input type="text" name="usuario-inicio" placeholder="Username" required="required" />
        <input type="password" name="password-inicio" placeholder="Password" required="required" />
        <button type="submit" name="boton-inicio-confirmar" class="btn btn-primary btn-block btn-large">Entrar</button>
    </form>
</div>
</body>
</html>