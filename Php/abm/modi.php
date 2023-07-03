<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Consultar la base de datos para obtener los atributos del Pokémon con el ID proporcionado
    $sql = "SELECT * FROM pokemon WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        // El Pokémon existe en la base de datos
        $pokemon = mysqli_fetch_assoc($resultado);
        echo json_encode($pokemon);
    } else {
        // El Pokémon no existe en la base de datos
        echo json_encode([]);
    }
}

mysqli_close($conexion);
?>
