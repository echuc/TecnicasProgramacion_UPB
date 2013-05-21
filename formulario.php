<!DOCTYPE html >
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Registro de usuario
		Apellido : <input type=text name="apellido">
		Nombre : <input type=text name="nombre">
		Género :		
			Hombre <input type=radio name="genero" value="H">
			Mujer <input type=radio name="genero" value="M">
		Ocupación		
			<select name="ocupacion">
				<option value="profesor">Profesor</option>
				<option value="estudiante">Estudiante</option>
				<option value="amaCasa">Ama de casa</option>
				<option value="burocrata">Burócrata</option>
				<option value="otro">Otro</option>
			</select>
		Comentarios
			<textarea rows="3" name="comentarios">
				Escriba aquí sus comentarios
			</textarea>
			<input type="submit" value="Enviar">
			<input type="reset" value="Nuevo">
	</form>
</body>
</html>
