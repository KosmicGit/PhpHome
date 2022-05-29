<?php

$mysqli = new mysqli("localhost", "db", "2022@-phphome", "raspi");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
