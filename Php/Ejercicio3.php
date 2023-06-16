<?php
    echo $_SERVER['SERVER_ADDR'];
    echo $_SERVER['REMOTE_ADDR'];

    $variablesServidor = array(
        "SERVER_ADDR" => $_SERVER['SERVER_ADDR'],
        "SERVER_PORT" => $_SERVER['SERVER_PORT'],
        "SERVER_NAME" => $_SERVER['SERVER_NAME'],
        "DOCUMENT_ROOT" => $_SERVER['DOCUMENT_ROOT']
    );
    $variablesCliente = array(
        "REMOTE_ADDR" => $_SERVER['REMOTE_ADDR'],
        "REMOTE_PORT" => $_SERVER['REMOTE_PORT']
    );
    $variablesRequerimiento = array(
        "SCRIPT_NAME" => $_SERVER['SCRIPT_NAME'],
        "REQUEST_METHOD" => $_SERVER['REQUEST_METHOD']
    );
?>

<h2>Variables de Servidor</h2>

<table style="border: solid; border-collapse: collapse;">
<?php foreach ($variablesServidor as $variable => $valor): ?>
    <tr>
      <td style="border: solid;"><?php echo $variable; ?></td>
      <td style="border: solid;"><?php echo $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<h2>Variables de cliente</h2>

<table style="border: solid; border-collapse: collapse;">
  <tr>
  <?php foreach ($variablesCliente as $variable => $valor): ?>
    <tr>
      <td style="border: solid;"><?php echo $variable; ?></td>
      <td style="border: solid;"><?php echo $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<h2>Variables de requerimiento</h2>

<table style="border: solid; border-collapse: collapse;">
<?php foreach ($variablesRequerimiento as $variable => $valor): ?>
    <tr>
      <td style="border: solid;"><?php echo $variable; ?></td>
      <td style="border: solid;"><?php echo $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>

<h2>Todas</h2>

<?php
    foreach ($_SERVER as $key_name => $value_value) {
        echo $value_value. '<br>';
    }
?>