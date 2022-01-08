<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>egistro de Alyumno</title>
   </head>
   <body>
     <div class="" style="background-color:blue; opacity: 0.5; text-align:center; margin: auto; padding: 15px; color: white; font-size:2em">
       <h2>Datos del alumno</h2>
       <form class="" action="ralumno.php" method="post" style="padding: 15px;">
         <label for="NombreAlumno">Nombre(s)</label>
         <input type="text" name="NombreAlumno">
         <label for="ApellidoPaterno">Apellido Paterno</label>
         <input type="text" name="ApellidoPaterno">
         <label for="ApellidoMaterno">Apellido Materno</label>
         <input type="text" name="ApellidoMaterno"><br>
         <label for="curp">CURP</label>
         <input type="text" name="Curp">
         <label for="FechaNacimiento">Fecha de Nacimiento</label>
         <input type="date"b name="FechaNacimiento"><br>
         <label for="GrupoSanguineo">Grupo Sanguineo</label>
         <input type="radio" name="GrupoSanguineo" value="A+">A+
         <input type="radio" name="GrupoSanguineo" value="A-">A-
         <input type="radio" name="GrupoSanguineo" value="B+">B+
         <input type="radio" name="GrupoSanguineo" value="B-">B-
         <input type="radio" name="GrupoSanguineo" value="AB+">AB+
         <input type="radio" name="GrupoSanguineo" value="AB-">AB-
         <input type="radio" name="GrupoSanguineo" value="O+">O+
         <input type="radio" name="GrupoSanguineo" value="O-">O- <br>
         <label for="Seguro">Institucion de Seguro</label>
         <select name="Seguro" id="">
           <option value="IMSS">IMSS</option>
           <option value="ISSSTE">ISSSTE</option>
           <option value="ISSEMyM">ISSEMyM</option>
           <option value="SEDENA">SEDENA</option>
           <option value="OTRO">OTRO</option>
         </select><br>
         <label for="Telemergencia">Teléfono de emergencia</label>
         <input type="text" name="TelEmergencia">
         <label for="ContactoEmergencia"> Nombre del contacto</label>
         <input type="text" name="ContactoEmergencia">
         <label for="Parentescoemergencia">Parentesco del contacto</label>
         <input type="text" name="Parentescoemergencia"><br><br>
         <input type="submit" name="Registrar" value="Registrar">
       </form>
     </div>

   </body>
 </html>
