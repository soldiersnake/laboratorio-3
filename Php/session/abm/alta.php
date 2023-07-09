<?php
include './manejoSesion.inc';

$host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
$dbname = "b8fabxioa1cltwnfexul";
$user = "uioe69jvjh86fatw";
$password = "Rcev4FvTQSGVrwP6R3ht";

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);

    $nombre = $_POST['nombre'];
    $tipo = $_POST['tipo'];
    $ataque_principal = $_POST['ataque'];
    $debilidad = $_POST['debilidad'];

    $respuesta_estado = '';

    $respuesta_estado = $respuesta_estado . "Entradas recibidas en el req http: \$nombre: $nombre, \$tipo: $tipo, \$ataque_principal: $ataque_principal, \$debilidad: $debilidad\n\nConexión exitosa.";

    $sql = "INSERT INTO pokemon (nombre, tipo, ataque_principal, debilidad) VALUES (:nombre, :tipo, :ataque_principal, :debilidad)";
    $stmt = $dbh->prepare($sql);
    $respuesta_estado = $respuesta_estado . "\nPreparación exitosa.";

    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":tipo", $tipo);
    $stmt->bindParam(":ataque_principal", $ataque_principal);
    $stmt->bindParam(":debilidad", $debilidad);

    $stmt->execute();

    $id = $dbh->lastInsertId();


    if (!isset($_FILES["pdf"])) {
        $respuesta_estado .= "\nNo se inicializó la variable FILES";
    } else {
        if (empty($_FILES["pdf"]["name"])) {
            $respuesta_estado .= "\nNo se ha seleccionado ningún archivo para enviar.";
        } else {
            if (!is_uploaded_file($_FILES["pdf"]["tmp_name"])) {
                $respuesta_estado .= "\nError al cargar el archivo.";
            } else {
                $respuesta_estado .= "\nBuscando documento asociado al código de artículo $id";
                $pdf = file_get_contents($_FILES["pdf"]["tmp_name"]);
                $pdfEncoded = base64_encode($pdf);

                $sql = "UPDATE pokemon SET pdf = :pdf WHERE id = :id";
                $stmt = $dbh->prepare($sql);

                $stmt->bindParam(":pdf", $pdfEncoded);
                $stmt->bindParam(":id", $id);

                $stmt->execute();
                $respuesta_estado .= "\nPDF cargado";
            }
        }
    }

    $dbh = null;
    $respuesta_estado = $respuesta_estado . "\nEjecución exitosa.";
    echo $respuesta_estado;
} catch (PDOException $e) {
    $respuesta_estado = $respuesta_estado . "\nERROR: \n" . $e->getMessage();
    echo $respuesta_estado;
}
?>
