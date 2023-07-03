<?php
include 'datosConexionBase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    if (isset($_POST['nombre'])) {
        // Se proporcionaron datos adicionales, actualizar el registro
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $ataque = $_POST['ataque'];
        $debilidad = $_POST['debilidad'];
        // Recuerda manejar la imagen si la tienes

        $sql = "UPDATE pokemon SET nombre = '$nombre', tipo = '$tipo', ataque_principal = '$ataque', debilidad = '$debilidad' WHERE id = '$id'";

        if (mysqli_query($conexion, $sql)) {
            echo "Actualizado con éxito";
        } else {
            echo "Error al actualizar el Pokémon: " . mysqli_error($conexion);
        }
    } else {
        // Solo se proporcionó el id, devolver los detalles del registro
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
}

mysqli_close($conexion);
?>
