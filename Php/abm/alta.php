<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ataque = $_POST['ataque'];
    $debilidad = $_POST['debilidad'];

    $sql = "INSERT INTO pokemon (nombre, tipo, ataque_principal, debilidad) VALUES ('$nombre', '$tipo', '$ataque', '$debilidad')";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro insertado correctamente";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
