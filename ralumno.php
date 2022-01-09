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
  settype($Idtutor,"int");
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
  settype($Edad,"int");
  $Fn = strtotime($Fecha);
  $Fnacimiento = date('yyyy-mm-dd',$Fn);
  if ($_FILES['Ficha']) {
    $Ficha = basename($_FILES["Ficha"]["name"]);
    $Nficha =date("m-d-y").date("h-i-s")."-".$Ficha;

  }else {
    echo "No se pudo subir la ficha";
  }
  if ($_FILES['Reglamento']) {
    $Reg = basename($_FILES["Reglamento"]["name"]);
    $Nreg = date("m-d-y").date("h-i-s")."-".$Reg;

  }else {
    echo "No se pudo subir el reglamento";
  }
  if ($_FILES['Responsiva']) {
    $Resp = basename($_FILES["Responsiva"]["name"]);
    $Nresp = date("m-d-y").date("h-i-s")."-".$Resp;

  }else {
    echo "No se pudo subir la carta responsiva";
  }
  if ($_FILES['EscCurp']) {
    $Ecurp = basename($_FILES["EscCurp"]["name"]);
    $Ncurp = date("m-d-y").date("h-i-s")."-".$Ecurp;

  }else {
    echo "No se pudo subir el curp";
  }
  if ($_FILES['Fotografia']) {
    $Foto = basename($_FILES["Fotografia"]["name"]);
    $Nfoto = date("m-d-y").date("h-i-s")."-".$Foto;

  }else {
    echo "No se pudo subir la Fotografia";
  }
  if ($_FILES['INE']) {
    $Ine = basename($_FILES["INE"]["name"]);
    $Nine = date("m-d-y").date("h-i-s")."-".$Ine;

  }else {
    echo "No se pudo subir el INE";
  }
  $query = "INSERT INTO alumno(Nombre,ApellidoPaterno,ApellidoMaterno,Curp,FechaNacimiento,Edad,GrupoSanguineo,AfiliacionSalud,FichaInscripcion,Reglamento,Responsiva,EscaneoCurp,Fotografia,IneTutor,TelefonoEmergencia,NombreEmergencia,ParentescoEmergencia,tutor_idtutor) VALUES('$Nombre','$ApellidoP','$ApellidoM','$Curp','$Fecha','$Edad','$Sangre','$Seguro','$Nficha','$Nreg','$Nresp','$Ncurp','$Nfoto','$Nine','$TelEmer','$NombreEmergencia','$Parentesco','$Idtutor')";
  $resultado = mysqli_query($con,$query);
  if ($resultado) {
    Subir($Nficha,$_FILES["Ficha"]["tmp_name"]);
    Subir($Nreg,$_FILES["Reglamento"]["tmp_name"]);
    Subir($Nresp,$_FILES["Responsiva"]["tmp_name"]);
    Subir($Ncurp,$_FILES["EscCurp"]["tmp_name"]);
    Subir($Nfoto,$_FILES["Fotografia"]["tmp_name"]);
    Subir($Nine,$_FILES["INE"]["tmp_name"]);
    echo "<script>alert('Se registro el alumno con éxito')";
    header("Location:home.php");
  } else {
    echo "<script>alert('no se pudo registrar el usuario') window.history.go(-1);</script>";
  }

 ?>
