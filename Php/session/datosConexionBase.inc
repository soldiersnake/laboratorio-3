<?php
$host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
$dbname = "b8fabxioa1cltwnfexul";
$user = "uioe69jvjh86fatw";
$password = "Rcev4FvTQSGVrwP6R3ht";

try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM login_usuario";
    $stmt = $dbh->prepare($sql); //prepara tabla sql
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    $stmt->execute(); // ejecuta llamda

    $usuarios = [];

    while ($fila = $stmt->fetch()) {
        $objUsuario = new stdClass;
        $objUsuario->login = $fila["login"];
        $objUsuario->password = $fila["password"];
        // $objUsuario->contador = $fila["contador"];

        array_push($usuarios, $objUsuario);
    }

    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
