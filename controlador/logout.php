<?php

include("../conexion.php");

$fecha = date("Y-m-d H:i:s");
$id_usuario=$_SESSION['id-usuario-logueado'];
$comando='desloguedo';
$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha)VALUES ('$id_usuario',2,'$comando','$fecha')";
$mysqli->query($query2);
session_destroy();
if (isset($_COOKIE['user'])) {
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 3600, '/'); // empty value and old timestamp
}
sleep(2);
header("Location: ../index.php");
die();
//echo "<script languaje='javascript' type='text/javascript'>window.location.replace('../index.php');</script>";
?>
