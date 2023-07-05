<?php
    if(!autentication($log, $cl)){
        header('location:./formLogin.html');
        exit();
    }

    session_start();

    $_SESSION['ejer08idsesion'] = session_create_id();

    $_SESSION['login'] = $log;

    echo "<p><button onClick=\"location.href ='./abm'\"> Ingrese a la aplicación </button></p>";
    echo "<p><button onClick=\"location.href ='./destruirSesion.php'\"> Terminar Session </button></p>";

?>