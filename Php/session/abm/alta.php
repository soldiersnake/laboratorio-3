<?php
include './manejoSesion.inc';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ataque = $_POST['ataque'];
    $debilidad = $_POST['debilidad'];
    
    $pdfBlob = NULL;
    if (isset($_FILES['pdf'])) {
        $tmpName = $_FILES['pdf']['tmp_name'];
        $pdfBlob = file_get_contents($tmpName);
    }

    $sql = "INSERT INTO pokemon (nombre, tipo, ataque_principal, debilidad, pdf) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt === false) {
        die('Error al preparar la declaración: ' . mysqli_error($conexion));
    }
    
    mysqli_stmt_bind_param($stmt, 'ssssb', $nombre, $tipo, $ataque, $debilidad, $pdfBlob);

    if (mysqli_stmt_execute($stmt)) {
        echo "alert('Se inserto correctamente los datos desde alerta')";
        // Redireccionar a index.html
        header("Location: index.php");
        exit();
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>
