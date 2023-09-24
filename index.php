<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>estilos dinamicos con php</title>
    <link rel="stylesheet"type="text/css" href="estilo.php">
  </head>
  <body>
  <center>  <h1 class="app">app para estilos dinamicos</h1></center>
  <center>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <input class="saludo" type="text" name="saludo" value="">
      <input class="btn" type="submit" name="enviar" value="enviar">
    </form>
    </center>

  <br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $saludo = $_REQUEST['saludo'];
    ?>
    <center>
      <p class="parrafo"><?php echo$saludo ; ?></p>
    </center>
     <?php  }?>
    


    </body>
</html>
