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
    echo '<hr>';

    echo '<h3>Arreglos</h3>';
    echo '<p><span style="color: blue;">SuPAlabra[0]</span>: Hola</p>';
    echo '<p><span style="color: blue;">SuPAlabra[1]</span>: Hello</p>';
    echo '<p>Tipo de<span style="color: blue;">SuPAlabra</span>: Array</p>';
    echo '<p>Se agrego por programa dos elementos nuevos</p>';
    echo '<h3>Todos los elementos originales y agregados:</h3>';
    echo '<ul>
            <li>Hola</li>
            <li>Hello</li>
            <li>Ciao</li>
            <li>Holis</li>
        </ul>';

    echo '<h3>Arreglos de dos dimensiones (Diccionario)</h3>';
    echo '<h4>La variable DireccionariaBasica TIene el siguiente tipo: array</h4>';

    $idiomaEspanol = ["Buen día", "Hola", "Chau"];
    $idiomaIngles = ["Good day", "Hello", "Goodbye"];
    $idiomaItaliano = ["Buongiorno", "Ciao", "Arrivederci"];
    $idiomaFrances = ["Bonjour", "Salut", "Au revoir"];

    $idiomas = array("Español" => $idiomaEspanol, "Inglés" => $idiomaIngles, "Italiano" => $idiomaItaliano, "Francés" => $idiomaFrances);
   
    // Imprimir la tabla
    echo '<table style="border: solid; border-collapse: collapse;">';
    echo '<thead>';
    echo '<tr>';
    foreach ($idiomas as $idioma => $saludos) {
        echo '<th style="border: solid;">' . $idioma . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    for ($i = 0; $i < count($idiomaEspanol); $i++) {
        echo '<tr>';
        foreach ($idiomas as $idioma => $saludos) {
            echo '<td style="border: solid;">' . $saludos[$i] . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';


    echo '<h3>Tambien asi se puede expresar el valor de $aDiccionarioBasico[1][3]: au revoir</h3>';
    $cantElementos = count($idiomas);

    echo '<h2>Variables tipo de arreglo asociativo</h2>';

    $objRenglonPedido = new stdClass;
    $objRenglonPedido-> codArt = "cp001";
    $objRenglonPedido-> description = 'Saco de vestir';
    $objRenglonPedido-> precioUnitario = 2000;
    $objRenglonPedido->stock =20;
    $renglonesPedido = [];
    
    array_push($renglonesPedido, $objRenglonPedido);

    foreach ($renglonesPedido as $objRenglonPedido) {
        echo '<p>Codigo del articulo: '.$objRenglonPedido->codArt.'</p>';
        echo '<p>Precio Unitario: '.$objRenglonPedido->precioUnitario.'</p>';
        echo '<p>Descripcion del articulo: '.$objRenglonPedido->description.'</p>';
        echo '<p>Cantidad: '.$objRenglonPedido->stock.'</p>';
        echo '<p>Cantidad de elementos: '.$objRenglonPedido->cantidadDeRenglones=count($renglonesPedido).'</p>';
        echo '<p>La variable es de tipo: '.gettype($objRenglonPedido).'</p>';
    }    
    echo '<hr>';
    echo '<h3>Expresiones aritmeticas</h3>';
    
    $variable5X = 3;
    $variable5Y = 4;
    echo '<p>La variable 5X tiene el siguiente valor:' .$variable5X. '</p>';
    echo '<p>La variable 5Y tiene el siguiente valor:' .$variable5Y. '</p>';
    echo '<p>La variable 5X tiene el siguiente Tipo:' .gettype($variable5X). '</p>';
    echo '<p>La variable 5Y tiene el siguiente Tipo:' .gettype($variable5Y). '</p>';
    echo '<p>Asi se asigna una expresion aritmetica por ejemplo de Suma (5X + 5Y) = '.$variable5X+$variable5Y. '</p>';
    echo '<p>Asi se asigna una expresion aritmetica por ejemplo de Mult (5X * 5Y) = '.$variable5X*$variable5Y. '</p>';
    echo '<p>Asi se asigna una expresion aritmetica por ejemplo de Div (5X / 5Y) = '.$variable5X/$variable5Y. '</p>';

?>


