<!DOCTYPE html >
<html lang="es">
<head>
    <meta charset="utf-8">
    <title> </title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h1>Registro de usuario</h1>
		Nombre : <input type=text name="nombre"><br>
		Edad : <input type=text name="edad"><br>
		Género :		
			Hombre <input type=radio name="genero" value="H">
			Mujer <input type=radio name="genero" value="M"><br>
		Ocupación :		
			<select name="ocupacion">
				<option value="profesor">Profesor</option>
				<option value="estudiante">Estudiante</option>
				<option value="amaCasa">Ama de casa</option>
				<option value="burocrata">Burócrata</option>
				<option value="otro">Otro</option>
			</select><br>
		Aficiones :
			<input type=checkbox name="aficion1" value="Deporte">Hacer deporte &nbsp;
			<input type=checkbox name="aficion2" value="Leer">Leer&nbsp;
			<input type=checkbox name="aficion3" value="Socializar">Socializar<br>
		Comentarios :
			<textarea rows="3" name="comentarios">Escriba aquí sus comentarios</textarea><br>
			<input type="submit" value="Enviar">&nbsp;
			<input type="reset" value="Nuevo">
	</form>
</body>
</html>
