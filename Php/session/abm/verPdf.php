<?php
include './manejoSesion.inc';
include 'datosConexionBase.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT pdf FROM pokemon WHERE id = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $pdfBlob);
    mysqli_stmt_fetch($stmt);

    $respuesta = [
        "documentoPDF" => base64_encode($pdfBlob)
    ];

    echo json_encode($respuesta);
}

mysqli_close($conexion);
?>
