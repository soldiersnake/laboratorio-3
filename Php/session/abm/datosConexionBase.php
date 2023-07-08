<?php

$host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
$dbname = "b8fabxioa1cltwnfexul";
$user = "uioe69jvjh86fatw";
$password = "Rcev4FvTQSGVrwP6R3ht";

$conexion = mysqli_connect($host, $user, $password, $dbname);

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
