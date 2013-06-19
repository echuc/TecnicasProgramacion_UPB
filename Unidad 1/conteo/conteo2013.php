<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Conteo rápido</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Conteo rápido</h1>
	<br>
	<h2>Escribe el número de votos por partido político</h2>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<table>
			<tr>
				<td> PRI <br> <img src="pri.png">	</td>
				<td> PAN <br> <img src="pan.png">	</td>
				<td> PRD <br> <img src="prd.png">	</td>
				<td> PT  <br> <img src="pt.png">	</td>
				<td> PVEM<br> <img src="pvem.png">	</td>
				<td>OTROS</td>
			</tr>
			<tr>
				<td><input type="radio" name="votos" value="pri"></td>
				<td><input type="radio" name="votos" value="pan"></td>
				<td><input type="radio" name="votos" value="prd"></td>
				<td><input type="radio" name="votos" value="pt"></td>
				<td><input type="radio" name="votos" value="pvem"></td>
				<td><input type="radio" name="votos" value="otros"></td>
			</tr>
			<tr>
				<td><input type="text" name="votosPri"  size="4" value="0"></td>
				<td><input type="text" name="votosPan" size="4" value="0"></td>
				<td><input type="text" name="votosPrd" size="4" value="0"></td>
				<td><input type="text" name="votosPt" size="4" value="0"></td>
				<td><input type="text" name="votosPvem" size="4" value="0"></td>
				<td><input type="text" name="votosOtros" size="4" value="0"></td>
			</tr>
		</table>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>