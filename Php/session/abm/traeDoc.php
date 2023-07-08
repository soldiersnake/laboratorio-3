<?php
include './manejoSesion.inc';
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "SELECT pdf FROM pokemon WHERE id = '$id'";

    $resultado = mysqli_query($conexion, $sql);

    if ($fila = mysqli_fetch_assoc($resultado)) {
        $pdf = $fila['pdf'];
        echo $pdf;
    } else {
        echo "Error al obtener el documento";
    }
}

mysqli_close($conexion);
?>
