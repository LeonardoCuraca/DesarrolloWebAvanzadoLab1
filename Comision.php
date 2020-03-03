<?php
  $venta = 0;
  $comision = 0;
  if (isset($_POST)) {
    $venta = $_POST['venta'];
    if ($venta > 150 && $venta <= 400) {
      $comision = 0.1 * $venta;
    }
    if ($venta > 400) {
      $comision = 0.09 * $venta + 50;
    }
  }
?>
<html>
  <head>
    <title>Comisión PHP</title>
  </head>
  <body>
    <form method="POST">
      <p>Venta total <input type="number" name="venta" value="<?php echo $venta; ?>" /></p>
      <p><input type="submit" value="Calcular" /></p>
      <p>Comisión <?php echo $comision; ?></p>
    </form>
  </body>
</html>
