<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'conexion.php'; ?>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<p>Hola mundo</p><br>
		<form class="" action="insertar.php" method="post">
			<label for="NombreTutor">Ingrese su nombre</label>
			<input type="text" name="NombreTutor" value=""><br>

			<label for="ApellidoPaternoTutor">Ingrese su apellido paterno</label>
			<input type="text" name="ApellidoPaternoTutor" value=""><br>

			<label for="ApellidoMaternoTutor">ngrese su apellido materno</label>
			<input type="text" name="ApellidoMaternoTutor" value=""><br>

			<label for="TelefonoTutor">Ingrese su teléfono</label>
			<input type="text" name="TelefonoTutor" value=""><br>

			<label for="CorreoTutor">Correo</label>
			<input type="text" name="CorreoTutor" value=""><br>

			<label for="ContrasenaTutor">Ingrese contraseña</label>
			<input type="text" name="ContrasenaTutor" value=""><br>

			<input type="submit" name="Enviar" value="Registar">
		</form>

	</body>
</html>
