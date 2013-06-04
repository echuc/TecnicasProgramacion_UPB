<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>sueldos extras</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Nombre : <input type="text" name="nombre">
		<br>
		Sueldo semanal : <input type="text" name="sueldo">
		<br>
		<strong>Horas exras trabajadas:</strong>
		<table>
			<tr>
				<td>Lunes</td>
				<td>Martes</td>
				<td>Miercoles</td>
				<td>Jueves</td>
				<td>Viernes</td>
				<td>Sabado</td>
			</tr>
			<tr>
				<td><input type="text" name="hhLunes" value="0" size="3"> </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<input type="submit" value="Calcular sueldo" name="Enviar">
	</form>

	<?php
		if (isset($_POST['Enviar']))
		{ 
			// recuperamos los valores que respondi en el formulario
			$nombre=$_POST['nombre'];
			$sueldoSemanal=$_POST['sueldo'];
			$hhLunes = $_POST['hhLunes'];

			$hhDoblesLunes = 0;
			$hhTriplesLunes=0; 




			//calcular pago diario, hora
			$sueldoDiario = $sueldoSemanal / 6;
			$sueldoHora = $sueldoDiario / 8;

			//cualcular horas extras dobles y tripples por dia de la semana
			if ($hhLunes <= 8)
			{
				$hhDoblesLunes = $hhLunes;
			}
			if ($hhLunes > 8)
			{
				$hhDoblesLunes = 8;
				$hhTriplesLunes = $hhLunes-8;

			}


			// Imprimo valores que respondi del formulario
			echo "<br>Trabajador: $nombre";
			echo "<br>Sueldo semanal: $sueldoSemanal";
			echo "<br>Sueldo diario: $sueldoDiario";
			echo "<br>Sueldo por hora: $sueldoHora";
		}
	?>

</body>
</html>