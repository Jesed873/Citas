<?php
  session_start();
  $vsesion = $_SESSION["Nombre"];
  if ($vsesion == null || $vsesion == "") {
    echo "No ha iniciado sesion";
    die();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
  </head>
  <body>
    <h1>BIENVENIDO: <?php   echo $_SESSION["Nombre"] ." " .$_SESSION["ApellidoPaterno"]." ".$_SESSION["ApellidoMaterno"]; ?></h1>
    <a href="cerrar_sesion.php">Cerrar sesion</a>
  </body>
</html>
