<?php
  var_dump($_POST);
  $Nombre = $_POST['NombreAlumno'];
  $ApellidoP = $_POST['ApellidoPaterno'];
  $ApellidoM = $_POST['ApellidoMaterno'];
  $Curp = $_POST['Curp'];
  $Fecha = $_POST['FechaNacimiento'];
  $Sangre = $_POST['GrupoSanguineo'];
  $Seguro = $_POST['Seguro'];
  $TelEmergencia = $_POST['TelEmergencia'];
  $NombreEmergencia = $_POST['ContactoEmergencia'];
  $Parentesco = $_POST['Parentescoemergencia'];
  echo "<br><br>";
  echo $Nombre . " ". $ApellidoP . " ". $ApellidoM . "<br><br>";
  echo $Curp . " ". $Fecha . "<br><br>";
  echo $Sangre . " ". $Seguro . "<br><br>";
  echo $TelEmergencia . " " . $NombreEmergencia . " " . $Parentesco . "<br><br>";
 ?>
