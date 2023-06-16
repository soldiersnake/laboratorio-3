<?php
    echo '<H1>Todo lo escrito fuera de las marcas de PHP es entregado en la respuesta HTTP sin pasar por el procesador PHP</H1>';
    echo '<hr>';
    echo '<p>Todo texto y/o <span style="color: blue;">entregado por el procesador PHP</span> usando la sentencia echo</p>';    
    echo "<hr>";
    
    echo '<p>Sin usar concatenador <span style="color: blue;">Son variables</span> : valor 1</p>';
    echo '<p>Usando concatenador <span style="color: blue;">Son variables</span> : valor 1</p>';
    echo '<hr>';

    echo '<p>Variable de tipo logicas (verdadero) <span style="color: blue;">Son variables</span> : 1</p>';
    echo '<p>Variable de tipo logicas (Falso) <span style="color: blue;">Son variables</span> : </p>';
    echo '<hr>';

    echo '<p><span style="color: blue;">MI CONSTANTE</span> : Valor Constante</p>';
    echo '<p>Tipo de <span style="color: blue;">MI CONSTANTE</span> : String</p>';
?>
