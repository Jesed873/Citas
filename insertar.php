<?php
  include 'conexion.php';
  $nombre = $_POST['NombreTutor'];
  $apellidoP = $_POST['ApellidoPaternoTutor'];
  $apellidoM = $_POST['ApellidoMaternoTutor'];
  $telTutor =$_POST['TelefonoTutor'];
  $correo = $_POST['CorreoTutor'];
  $contrasena = $_POST['ContrasenaTutor'];
  $insertar = "INSERT INTO tutor(Nombre,ApellidoPaterno,ApellidoMaterno,Telefono,Correo,Contrasena) values('$nombre','$apellidoP','$apellidoM','$telTutor','$correo','$contrasena');";
  $resultado = mysqli_query($con,$insertar);

  if ($resultado) {
    echo "<script>alert('Se registro el usuario con éxito')";
    header("Location:index.php");
  } else {
    echo "<script>alert('no se pudo registrar el usuario'); window.history.go(-1);</script>";
  }
 ?>
