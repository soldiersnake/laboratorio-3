<?php
function autentica($login, $password) {
    $resultado;
    $claveEncriptada = sha1($password);

    $host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
    $dbname = "b8fabxioa1cltwnfexul";
    $user = "uioe69jvjh86fatw";
    $dbPassword = "Rcev4FvTQSGVrwP6R3ht";

    try {
        $dsn = "mysql:host=$host;dbname=$dbname";
        $dbh = new PDO($dsn, $user, $dbPassword);
    } catch (PDOExcepction $ex) {
        die("Error al conectar con la base de datos: " . $ex->getMessage()); // Detener la ejecución en caso de error
    }

    $sql = "SELECT usuario FROM login_usuario WHERE usuario = :usuario AND clave = :clave";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":usuario", $login);
    $stmt->bindParam(":clave", $claveEncriptada);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $aux = $stmt->fetch();

    if (empty($aux)) {
        $resultado = false;
    } else {
        $resultado = true;
    }

    return $resultado;
}
?>
