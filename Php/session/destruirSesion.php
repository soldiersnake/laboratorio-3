<?php
    include 'proteccion.php';

    session_destroy();
    header('Location:./formLogin.html');
?>