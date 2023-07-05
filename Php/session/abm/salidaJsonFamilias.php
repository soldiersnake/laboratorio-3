<?php
include 'datosConexionBase.php';

$sql = "SELECT tipo FROM pokemon";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    $tipos = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $tipos[] = $fila['tipo'];
    }
    echo json_encode($tipos);
} else {
    echo json_encode([]);
}

?>
