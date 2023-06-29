<?php 
    // $dbname= "Prueba"; 
    // $host= "localhost"; 
    // $user = "root"; 
    // $password = ""; 

    // $dbname = "bqaqedrgszmaxzzry3xb";
    // $host= "bqaqedrgszmaxzzry3xb-mysql.services.clever-cloud.com";
    // $user= "ussg4ckvxuovpsxj";
    // $password= "DzvwoTvBsMNPFIDxncts";

    $host= "bkx0ybsf6rgljwu6nmnx-mysql.services.clever-cloud.com";
    $dbname = "bkx0ybsf6rgljwu6nmnx";
    $user= "ua0qboohg3zoc6tj";
    $password= "vkBNnleJy2d4vcl1LpIv";

    try 
    { 
        $dsn = "mysql:host=$host;dbname=$dbname"; 
        $dbh = new PDO($dsn, $user, $password); /*Database Handle*/ 
        // $respuesta_estado = $respuesta_estado . "\nConexion exitosa"; 

        $orden = $_GET["orden"];
        $filtroId = $_GET["id"];
        // $filtroDescription = $_GET["description"];
        $filtroMarca = $_GET["marca"];
        $filtroModelo = $_GET["modelo"];
        $filtroPrecio = $_GET["precio"];
        // $filtroFecha = $_GET["fecha"];
        
        // $sql = "SELECT * FROM productos WHERE ID LIKE CONCAT('%',:filtroId,'%') AND Marca LIKE CONCAT('%',:filtroMarca ,'%') AND Modelo LIKE CONCAT('%',:filtroModelo ,'%') AND Precio LIKE CONCAT('%',:filtroPrecio ,'%') AND Fecha LIKE CONCAT('%',:filtroFecha ,'%') ORDER BY $orden";

        //nueva query
        // $sql = "SELECT p.* 
        // FROM productos p
        // INNER JOIN marca m ON p.marca_id = m.id
        // WHERE p.id LIKE CONCAT('%', :filtroId, '%') 
        //   AND p.description LIKE CONCAT('%', :filtroMarca, '%') 
        //   AND p.modelo LIKE CONCAT('%', :filtroModelo, '%') 
        //   AND p.precio LIKE CONCAT('%', :filtroPrecio, '%') 
        // --   AND p.fecha LIKE CONCAT('%', :filtroFecha, '%') 
        // ORDER BY $orden";

        // $sql = "SELECT p.*, m.description AS marca
        // FROM productos p
        // INNER JOIN marca m ON p.marca_id = m.id
        // WHERE p.id LIKE CONCAT('%', :filtroId, '%') 
        // AND p.description LIKE CONCAT('%', :filtroMarca, '%') 
        // AND p.modelo LIKE CONCAT('%', :filtroModelo, '%') 
        // AND p.precio LIKE CONCAT('%', :filtroPrecio, '%') 
        // --   AND p.fecha LIKE CONCAT('%', :filtroFecha, '%') 
        // ORDER BY $orden";

        $sql = "SELECT p.*, m.description AS marca
        FROM productos p
        INNER JOIN marca m ON p.marca_id = m.id
        WHERE m.description LIKE CONCAT('%', :filtroMarca, '%') 
        AND p.description LIKE CONCAT('%', :filtroModelo, '%') 
        AND p.modelo LIKE CONCAT('%', :filtroModelo, '%') 
        AND p.precio LIKE CONCAT('%', :filtroPrecio, '%') 
        --   AND p.fecha LIKE CONCAT('%', :filtroFecha, '%') 
        ORDER BY $orden";
        $stmt = $dbh->prepare($sql);

        $stmt->bindParam(':filtroId', $filtroId);
        $stmt->bindParam(':filtroMarca', $filtroMarca);
        $stmt->bindParam(':filtroModelo', $filtroModelo);
        $stmt->bindParam(':filtroPrecio', $filtroPrecio);
        // $stmt->bindParam(':filtroFecha', $filtroFecha);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        $ArrayGuitarras = [];
        $objGuitarras = new stdClass;

        while($fila = $stmt->fetch())
        {
            $objGuitarra = new stdClass;
            $objGuitarra->id = $fila["id"];
            $objGuitarra->marca = $fila["marca"];
            $objGuitarra->modelo = $fila["modelo"];
            $objGuitarra->precio = $fila["precio"];
            // $objGuitarra->año = $fila["Fecha"];
            array_push($ArrayGuitarras, $objGuitarra);
        }

        $dbh = null;
        $objGuitarras->Autos = $ArrayGuitarras;
        $objGuitarras->largo = count($ArrayGuitarras);
        $jsonGuitarras = json_encode($objGuitarras);
        echo $jsonGuitarras;

    } catch (PDOException $e) 
    { 
        // $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
        // echo $respuesta_estado;
        echo $e->getMessage();
     }

?>