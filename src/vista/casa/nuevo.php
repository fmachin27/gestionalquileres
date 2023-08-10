<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Nueva Casa</h1>
  <?php
  require 'src/vista/menu.php'; ?>
  <p><?= $this->datos; ?></p>


  <form action="index.php?casa&m=crear" method=" post">
    <label for="numero">numero</label>

    <input type="text" value="numero" name="numero">
    </label>
    <label for="calle">calle
      <input type="text" value="" name="calle">
    </label>
    <button type="submit" name="enviar">Enviar</button>
  </form>

</body>

</html>