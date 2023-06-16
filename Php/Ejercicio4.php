<?php
    $objRenglonPedido = new stdClass;
    $objRenglonPedido-> codArt = "asd123";
    $objRenglonPedido-> description = "Notebook AsusTUF";
    $objRenglonPedido-> precio = 1235;
    $objRenglonPedido-> cantidad = 21;
?>
<h2>Variables tipo Objeto en PHP. Objeto renglon de pedido</h2>
<h3><span style="color: blue;">$objRenglonPedido</span></h3>
<p>Codigo de articulo: <?php echo $objRenglonPedido-> codArt?></p>
<p>Descripcion del articulo: <?php echo $objRenglonPedido-> description?></p>
<p>Precio unitario: <?php echo $objRenglonPedido-> precio?></p>
<p>Cantidad: <?php echo $objRenglonPedido-> cantidad?></p>

<h3>Tipo de <span style="color: blue;">$objRenglonPedido</span>: Object</h3>
<h3>Definamos arreglo de pedidos:</h3>
<h3><span style="color: blue;">$renglonesPedido</span></h3>
<?php
    $renglonesPedido = [];
    array_push($renglonesPedido, $objRenglonPedido);
    array_push($renglonesPedido, $objRenglonPedido);
?>

<h3>Tabula <span style="color: blue;">$renglonesPedido</span>. Recorrer el arreglo de renglones y tabuladores con html:</h3>
<?php
    foreach ($renglonesPedido as $key => $value) {
        echo 'codArt: ' . $value->codArt . ', ';
        echo 'description: ' . $value->description . ', ';
        echo 'precio: ' . $value->precio . ', ';
        echo 'cantidad: ' . $value->cantidad;
        echo '</p> <br>';
    }
    echo '<h4>Cantidad de renglones:'. count($renglonesPedido) .'</h4>';

    echo '<h3>Produccion de un objeto<span style="color: blue;">$objRenglonesPedido</span> con dos atributos array renglonesPedido y cantidadDeRenglones</h3>
    ';
    $objRenglonesPedido = new stdClass;
    $objRenglonesPedido-> renglonesPedido = 2;
    $objRenglonesPedido-> cantidadDeRenglones = 3;

    echo '<p>Cantidad de renglones: <span>'.$objRenglonesPedido->cantidadDeRenglones.'<span></p>';
    echo '<h3>Produccion de un JSON jsonRenglones:</h3>';
    $jsonRenglonesPedido = json_encode($objRenglonesPedido);
    echo $jsonRenglonesPedido;
?>

