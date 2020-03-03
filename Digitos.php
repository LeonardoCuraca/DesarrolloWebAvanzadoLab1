<?php
  $numero = 0;
  $respuesta = "";
  if (isset($_POST)) {
    $numero = $_POST['numero'];
    $lengNum = strlen($numero);
    $countNum = $numero;
    $parSuma = 0;
    $imparSuma = 0;
    $rem = 0;

    for ($i = 0; $i < strlen($countNum); $i++) {
      $rem = $countNum % 10;
      if ($rem % 2 == 1) {
        $imparSuma += $rem;
      } else {
        $parSuma += $rem;
      }
      $countNum = $countNum / 10;
    }

  }
?>
<html>
  <head>
    <title>ParImpar PHP</title>
  </head>
  <body>
    <form method="POST">
      <p>Número <input type="number" name="numero" value="<?php echo $numero; ?>" /></p>
      <p><input type="submit" value="Verificar" /></p>
      <p>Total de Dígitos: <?php echo $lengNum; ?></p>
      <p>Suma de Pares: <?php echo $parSuma; ?></p>
      <p>Suma de Impares: <?php echo $imparSuma; ?></p>
    </form>
  </body>
</html>
