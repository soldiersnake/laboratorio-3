<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ataque = $_POST['ataque'];
    $debilidad = $_POST['debilidad'];

    $sql = "UPDATE pokemon SET nombre='$nombre', tipo='$tipo', ataque_principal='$ataque', debilidad='$debilidad' WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
