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
    <div class="">
      <h1>BIENVENIDO: <?php   echo $_SESSION["Nombre"] ." " .$_SESSION["ApellidoPaterno"]." ".$_SESSION["ApellidoMaterno"]; ?></h1>
      <a href="cerrar_sesion.php">Cerrar sesion</a>
    </div>
    <div class="">
      <form class="" action="alumno.php" method="post">
        <input type="submit" name="RegistroAlummno" value="Registrar un alumno">
      </form>
    </div>
  </body>
</html>
