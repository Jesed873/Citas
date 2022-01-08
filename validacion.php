<?php
  include 'conexion.php';

  $correo = $_POST['correo'];
  $pass = $_POST['contrasena'];
  $consulta = "SELECT * FROM tutor WHERE Correo = '$correo' and Contrasena = '$pass';";
  $query = mysqli_query($con,$consulta);

  if (mysqli_num_rows($query) == 1) {
    session_start();
    $sesion = mysqli_fetch_assoc($query);
    $_SESSION["Nombre"] = $sesion['Nombre'];
    $_SESSION["ApellidoPaterno"] = $sesion['ApellidoPaterno'];
    $_SESSION["ApellidoMaterno"] = $sesion['ApellidoMaterno'];
    $_SESSION["Id"] = $sesion['idtutor'];

    header("Location:home.php");

  }else {
    echo "usuario no encontrado";
    header("location:index.php");
  }
  mysqli_free_result($query);
  mysqli_close($con);


 ?>
