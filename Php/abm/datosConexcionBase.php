<?php

    $host= "b8fabxioa1cltwnfexul-mysql.services.clever-cloud.com";
    $dbname = "b8fabxioa1cltwnfexul";
    $user= "uioe69jvjh86fatw";
    $password= "Rcev4FvTQSGVrwP6R3ht";

    try 
    { 
        $dsn = "mysql:host=$host;dbname=$dbname"; 
        $dbh = new PDO($dsn, $user, $password); /*Database Handle*/ 
        $respuesta_estado = $respuesta_estado . "\nConexion exitosa"; 


    } catch (PDOException $e) 
    { 
        $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        echo $respuesta_estado;
        echo $e->getMessage();
     }

?>