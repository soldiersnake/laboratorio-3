<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM pokemon WHERE id = '$id'";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
