<?php

include './manejoSesion.inc';
include 'datosConexionBase.php';

if (!isset($_GET['id'])) {
    header('location: ./index.php');
    exit();
}

try {
    $host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
    $dbname = "b8fabxioa1cltwnfexul";
    $user = "uioe69jvjh86fatw";
    $password = "Rcev4FvTQSGVrwP6R3ht";

    $dsn = "mysql:host=$host;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);

    $id = $_GET["id"];

    $sql = "SELECT pdf FROM pokemon WHERE id = :id";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $fila = $stmt->fetch();
    $pdfMostrar = new stdClass;
    $pdfMostrar->documentoPDF = base64_encode($fila["pdf"]);
    $salidaJSON = json_encode($pdfMostrar, JSON_INVALID_UTF8_SUBSTITUTE);

    echo $salidaJSON;
    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
