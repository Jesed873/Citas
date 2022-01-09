<?php
  session_start();
  $vsesion = $_SESSION["Nombre"];
  if ($vsesion == null || $vsesion == "") {
    echo "No ha iniciado sesion";
    die();
  }
  include 'archivos.php';
  include 'conexion.php';
  include 'edad.php';
  $Idtutor = $_SESSION["Id"];
  $Nombre = $_POST['NombreAlumno'];
  $ApellidoP = $_POST['ApellidoPaterno'];
  $ApellidoM = $_POST['ApellidoMaterno'];
  $Curp = $_POST['Curp'];
  $Fecha = $_POST['FechaNacimiento'];
  $Sangre = $_POST['GrupoSanguineo'];
  $Seguro = $_POST['Seguro'];
  $TelEmer = $_POST['TelEmergencia'];
  $NombreEmergencia = $_POST['ContactoEmergencia'];
  $Parentesco = $_POST['Parentescoemergencia'];
  $Edad = CalcEdad($Fecha);
  if ($_FILES['Ficha']) {
    $Ficha = basename($_FILES["Ficha"]["name"]);
    $Nficha =date("m-d-y").date("h-i-s")."-".$Ficha;
    Subir($Nficha,$_FILES["Ficha"]["tmp_name"]);
  }else {
    echo "No se pudo subir la ficha";
  }
  if ($_FILES['Reglamento']) {
    $Reg = basename($_FILES["Reglamento"]["name"]);
    $Nreg = date("m-d-y").date("h-i-s")."-".$Reg;
    Subir($Nreg,$_FILES["Reglamento"]["tmp_name"]);
  }else {
    echo "No se pudo subir el reglamento";
  }
  if ($_FILES['Responsiva']) {
    $Resp = basename($_FILES["Responsiva"]["name"]);
    $Nresp = date("m-d-y").date("h-i-s")."-".$Resp;
    Subir($Nresp,$_FILES["Responsiva"]["tmp_name"]);
  }else {
    echo "No se pudo subir la carta responsiva";
  }
  if ($_FILES['EscCurp']) {
    $Ecurp = basename($_FILES["EscCurp"]["name"]);
    $Ncurp = date("m-d-y").date("h-i-s")."-".$Ecurp;
    Subir($Ncurp,$_FILES["EscCurp"]["tmp_name"]);
  }else {
    echo "No se pudo subir el curp";
  }
  if ($_FILES['Fotografia']) {
    $Foto = basename($_FILES["Fotografia"]["name"]);
    $Nfoto = date("m-d-y").date("h-i-s")."-".$Foto;
    Subir($Nfoto,$_FILES["Fotografia"]["tmp_name"]);
  }else {
    echo "No se pudo subir la Fotografia";
  }
  if ($_FILES['INE']) {
    $Ine = basename($_FILES["INE"]["name"]);
    $Nine = date("m-d-y").date("h-i-s")."-".$Ine;
    Subir($Nine,$_FILES["INE"]["tmp_name"]);
  }else {
    echo "No se pudo subir el INE";
  }
  $q1 = "INSERT INTO alumno(Nombre,ApellidoPaterno,ApellidoMaterno,Curp,FechaNacimiento,Edad,GrupoSanguineo,AfiliacionSalud,FichaInscripcion,Reglamento,Responsiva,EscaneoCurp,Fotografia,IneTutor,TelefonoEmergencia,NombreEmergencia,ParentescoEmergencia) VALUES('$Nombre','$ApellidoP','$ApellidoM','$Curp','$Fecha','$Sangre','$Seguro','$Nficha','$Nreg','$Nresp','$Ncurp','$Nfoto','$Nine'";
  $q2 = ",'$TelEmer','$NombreEmergencia','$Parentesco')";
  $query = $q1 . $q2;
  $resultado = mysqli_query($con,$query);
  if ($resultado) {
    echo "<script>alert('Se registro el alumno con éxito')";
    header("Location:home.php");
  } else {
    echo "<script>alert('no se pudo registrar el usuario'); window.history.go(-1);</script>";
  }
 ?>
