<?php
    session_start();
    if (!isset($_SESSION["ejerInicioSesion"])) {
        header("location:./formLogin.html");
        exit();
    }
?>
<?php
    header("location:./ABM/index.php");
?>