<?php
include './manejoSesion.inc';
include 'datosConexionBase.php';

$sql = "SELECT * FROM pokemon";

$resultado = mysqli_query($conexion, $sql);

$articulos = array();

while ($fila = mysqli_fetch_assoc($resultado)) {
    $articulos[] = $fila;
}

echo json_encode($articulos);

mysqli_close($conexion);
?>
