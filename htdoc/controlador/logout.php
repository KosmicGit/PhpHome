<?php

ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
include("../conexion.php");

$fecha = date("Y-m-d H:i:s");
$id_usuario=$_SESSION['id-usuario-logueado'];
$comando='desloguedo';
$query2 = "INSERT INTO historial(id_usuario, id_comando, comando, fecha)VALUES ('$id_usuario',8,$comando,'$fecha')";
$mysqli->query($query2);

session_destroy();

header("Location: ../index.php");

?>