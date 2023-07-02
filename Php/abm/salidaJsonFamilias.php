<?php
include 'datosConexion.php';

$sql = "SELECT tipo FROM pokemon";

$resultado = $dbh->query($sql);

if ($resultado) {
    $tipos = $resultado->fetchAll(PDO::FETCH_COLUMN);
    echo json_encode($tipos);
} else {
    echo "Error al obtener los datos de tipo: " . $dbh->errorInfo()[2];
}
?>
