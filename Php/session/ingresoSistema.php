<?php

include('./datosConexionBase.inc');

$login = $_POST["login"];
$password = $_POST["password"];
$loginBd = "";
$passwordBd = "";
// $contadorBd = 0;

foreach ($usuarios as $usuario) {
    if ($usuario->login == $login) {
        if ($usuario->clave == $clave) {
            $loginBd = $usuario->login;
            $passwordBd = $usuario->password;
            // $contadorBd = $usuario->contador;
        }
    }
}

// if (!isset($_SESSION['idSesion'])) {
    if (!$login || !$password || ($login != $loginBd || $password != $passwordBd)) {
        header('location: ./formLogin.html');
        exit();
    }

    session_start();

    // $contadorBd = $contadorBd + 1;

    // $host = "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
    // $dbname = "b8fabxioa1cltwnfexul";
    // $user = "uioe69jvjh86fatw";
    // $password = "Rcev4FvTQSGVrwP6R3ht";

    // try {
    //     $dsn = "mysql:host=$host;dbname=$dbname";
    //     $dbh = new PDO($dsn, $user, $password);

    //     $sql = "UPDATE usuarios SET contador = :contadorBd WHERE clave = :claveBd";
    //     $stmt = $dbh->prepare($sql);

    //     $stmt->bindParam(":claveBd", $passwordBd);
    //     // $stmt->bindParam(":contadorBd", $contadorBd);

    //     $stmt->execute();

    //     $dbh = null;
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // }

    $_SESSION['idSesion'] = session_create_id();
    $_SESSION['login'] = $login;
// }

echo "<h1>Accesso permitido</h1>";
echo "<h2>Sus parametros de sesión son los siguientes: </h2>";
echo "<div style='border: 1px solid black'>
    <h2>Información de sesión</h2>
    <h3>ID de sesión: <span style='color: blue'>" . $_SESSION['idSesion'] . "</span></h3>
    <h3>Login de usuario: <span style='color: blue'>" . $_SESSION['login'] . "</span></h3>
    </div>";

echo "<button onClick=\"location.href='./abm/'\">Ingresar a la aplicación</button>";
echo "<button onClick=\"location.href='./destruirSesion.php'\">Terminar sesión</button>";

?>