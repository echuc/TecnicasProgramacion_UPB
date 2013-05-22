<!DOCTYPE html >
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
	<?php
		if(isset($_POST['edad']))
		{
			/* Asigna los datos a las variables de PHP*/
			$nombre = $_POST['nombre'];
			$edad = $_POST['edad'];
		   if ($edad >= 18)
		   {
		   	  echo "Hola $nombre tienes $edad años y eres mayor de edad.";
		   }
		   else
		   {
		   	 echo "Hola $nombre tienes $edad años y eres menor de edad.";
		   }
		}
	?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h1>Registro de usuario</h1>
		Nombre : <input type=text name="nombre"><br>
		Edad : <input type=text name="edad"><br>
		<input type="submit" value="Enviar">&nbsp;
	</form>
</body>
</html>