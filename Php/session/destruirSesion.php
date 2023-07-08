<?php
    include './manejoSesion.inc';
    session_destroy();
    header('Location:./formLogin.html');
    exit();
?>