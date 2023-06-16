<?php
    $variable= 'Hola Mundo';
    $objPersona = new stdClass;
    $objPersona-> nombre = "Mariano";
    $objPersona-> tecnologia = "Javascript";
    $objPersona-> apellido = "Mariano";

    $objPersona2 = new stdClass;
    $objPersona2-> nombre = "Nicolas";
    $objPersona2-> tecnologia = "Angular";
    $objPersona2-> apellido = "Autalan";

    $arrPersona = [];
    array_push($arrPersona, $objPersona);
    array_push($arrPersona, $objPersona2);
?>
