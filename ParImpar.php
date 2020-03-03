<?php
  $numero = 0;
  $respuesta = "";
  if (isset($_POST)) {
    $numero = $_POST['numero'];

    if ($numero == 0) {
      $respuesta = "El número ingresado es nulo";
    } else {
      if ($numero % 2 == 1 || $numero % 2 == -1) {
        $respuesta = "El número ingresado es impar";
      } else {
        $respuesta = "El número ingresado es par";
      }
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
      <p><?php echo $respuesta; ?></p>
    </form>
  </body>
</html>
