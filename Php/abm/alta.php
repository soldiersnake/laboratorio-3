<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ataque = $_POST['ataque'];
    $debilidad = $_POST['debilidad'];
    $base64String = $_POST['pdf'];
    $pdfBlob = base64_decode($base64String);

    $sql = "INSERT INTO pokemon (nombre, tipo, ataque_principal, debilidad, pdf) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt === false) {
        die('Error al preparar la declaración: ' . mysqli_error($conexion));
    }
    mysqli_stmt_bind_param($stmt, 'ssssb', $nombre, $tipo, $ataque, $debilidad, $pdfBlob);

    if (mysqli_stmt_execute($stmt)) {
        echo "Registro insertado correctamente";
        // Redireccionar a index.html
        header("Location: index.html");
        exit();
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>