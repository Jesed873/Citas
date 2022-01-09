<?php
  function CalcEdad($nacimiento){
    $Fecha = $nacimiento;
    $Hoy = Date("y-m-d");
    $Edad = date_diff(date_create($Fecha),date_create($Hoy));
    //echo $Edad->format('%y');
    return $Edad->format('%y');
  }
 ?>
