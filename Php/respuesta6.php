<?php
    if(isset($_POST['clave'])){
        $clave = $_POST['clave'];
        $claveEnciptadaMD5 = md5($clave);
        $claveEnciptadaSHA1 = sha1($clave);
        echo '<p>La clave es: '. $clave . '</p>';
        echo '<p>La clave encriptada en MD5 es: <br>'. $claveEnciptadaMD5 . ' (128 bits o 16 pares hexadecimales)</p>';  
        echo '<p>La clave encriptada en SHA1 es: <br>'. $claveEnciptadaSHA1 . ' (160 bits o 20 pares hexadecimales)</p>';

    }else{
        echo '<form action="/laboratorio-3/Php/respuesta6.php" method="post">
            <label for="nombre">Ingrese la clase a encriptar:</label>
            <input type="text" id="nombre" name="clave" required><br><br>
            <button type="submit">Envio Clave</button>
        </form>';
    };
?>