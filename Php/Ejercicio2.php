<h2>En este ejemplo se utiliza la funcion include() que ubica codigo php definido en el archivo ejemplo2.inc</h2>
<h3>Las variables serian las siguientes</h3>

<?php
    include('./ejemplo2.php');
    require('./ejemplo2.php');
    
    echo 'el mensaje es: '.$variable;
    echo '<p>La longitud del arreglo es: '. count($arrPersona).' </p>';
?>


<h3>Aqui ya se esta ejecutando la funcion include().
     Cuando se usa include ocurre que si el archivo 'inc' no existe,
      se visualiza un warning
    y el script sigue ejecutandose hasta el final</h3>

    <table style="border: solid; border-collapse: collapse;">
  <tr>
    <th style="border: solid;">Nombre</th>
    <th style="border: solid;">Apellido</th>
    <th style="border: solid;">Tecnología</th>
  </tr>
  
  <?php foreach ($arrPersona as $persona): ?>
    <tr>
      <td style="border: solid;"><?php echo $persona->nombre; ?></td>
      <td style="border: solid;"><?php echo $persona->apellido; ?></td>
      <td style="border: solid;"><?php echo $persona->tecnologia; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<?php
    echo '<p>La longitud del arreglo es: '. count($arrPersona).' </p>';
?>