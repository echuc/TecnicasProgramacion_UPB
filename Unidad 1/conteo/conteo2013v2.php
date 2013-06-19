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
				<td>
					PRI<br>
					<img src="pri.png">
				</td>
				<td>
					PAN<br>
					<img src="pan.png">
				</td>
				<td>
					PRD<br>
					<img src="prd.png">
				</td>
				<td>
					PT<br>
					<img src="pt.png">
				</td>
				<td>
					PVEM<br>
					<img src="pvem.png">
				</td>
				<td>
					OTROS
				</td>
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
				<td><input type="text" size="4" value="0" name="votosPri"></td>
				<td><input type="text" size="4" value="0" name="votosPan"></td>
				<td><input type="text" size="4" value="0" name="votosPrd"></td>
				<td><input type="text" size="4" value="0" name="votosPt"></td>
				<td><input type="text" size="4" value="0" name="votosPvem"></td>
				<td><input type="text" size="4" value="0" name="votosOtros"></td>
			</tr>
		</table>
		<?php
			if (!isset($_POST['Enviar']))
			{ 
		?>
				<input type="hidden" name="contadorPri" value="0">
				<input type="hidden" name="contadorPan" value="0">
				<input type="hidden" name="contadorPrd" value="0">
				<input type="hidden" name="contadorPt" value="0">
				<input type="hidden" name="contadorPvem" value="0">
				<input type="hidden" name="contadorOtros" value="0">
		<?php
			} 
			else
			{
		?>
				<input type="hidden" name="contadorPri"  value="<?php echo $_POST['votosPri'] + $_POST['contadorPri']; ?>">
				<input type="hidden" name="contadorPan"  value="<?php echo $_POST['votosPan'] + $_POST['contadorPan']; ?>">
				<input type="hidden" name="contadorPrd"  value="<?php echo $_POST['votosPrd'] + $_POST['contadorPrd']; ?>">
				<input type="hidden" name="contadorPt"   value="<?php echo $_POST['votosPt']  + $_POST['contadorPt']; ?>">
				<input type="hidden" name="contadorPvem" value="<?php echo $_POST['votosPvem'] + $_POST['contadorPvem']; ?>">
				<input type="hidden" name="contadorOtros" value="<?php echo $_POST['votosOtros'] + $_POST['contadorOtros']; ?>">

		<?php
			} 
		?>
		
		<input type="submit" name="Enviar" value="Enviar">


	<?php
		if (isset($_POST['Enviar']))
		{



			if (isset($_POST['votos']))
			{
				/* 
				$votosPri = $_POST['votosPri'] + $_POST['contadorPri'];
				$votosPan = $_POST['votosPan'] + $_POST['contadorPan'];
				$votosPrd = $_POST['votosPrd'] + $_POST['contadorPrd'];
				$votosPt = $_POST['votosPt'] + $_POST['contadorPt'];
				$votosPvem = $_POST['votosPvem'] + $_POST['contadorPvem'];
				$votosOtros = $_POST['votosOtros'] + $_POST['contadorOtros'];
				switch ($_POST['votos']) {
					case 'pri':
						
						echo "<input type='hidden' name='contadorPri' value='$votosPri'>";
						break;
					case 'pan':
						
						echo "<input type='hidden' name='contadorPan' value='$votosPan'>";
						break;
					case 'prd':
						
						echo "<input type='hidden' name='contadorPrd' value='$votosPrd'>";
						break;
					case 'pt':
						
						echo "<input type='hidden' name='contadorPt' value='$votosPt'>";
						break;
					case 'pvem':
						
						echo "<input type='hidden' name='contadorPvem' value='$votosPvem'>";
						break;
					default:
						
						echo "<input type='hidden' name='contadorOtros' value='$votosOtros'>";
						break;
				}
				*/
				echo "<p><h1>Resultados</h1></p>"; 
				echo "Total votos PRI ".$_POST['votosPri'] + $_POST['contadorPri']."<br>";
				echo "Total votos PAN ".$_POST['votosPan'] + $_POST['contadorPan']."<br>";
				echo "Total votos PRD ".$_POST['votosPrd'] + $_POST['contadorPrd']."<br>";
				echo "Total votos PT ".$_POST['votosPt']  + $_POST['contadorPt']."<br>";
				echo "Total votos PVEM ".$_POST['votosPvem'] + $_POST['contadorPvem']."<br>";
				echo "Total otros votos ".$_POST['votosOtros'] + $_POST['contadorOtros']."<br>";
			} 
			else
			{
				echo "<h3>Error : Debes seleccionar un partido político y escribir el número de votos ...</h3>";
			}
			
	 	}
 	?>
 	</form>
</body>
</html>