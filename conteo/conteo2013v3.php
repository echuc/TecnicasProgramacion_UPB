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
				$totalPri = $_POST['votosPri'] + $_POST['contadorPri'];
				$totalPan = $_POST['votosPan'] + $_POST['contadorPan'];
				$totalPrd = $_POST['votosPrd'] + $_POST['contadorPrd'];
				$totalPt = $_POST['votosPt'] + $_POST['contadorPt'];
				$totalPvem = $_POST['votosPvem'] + $_POST['contadorPvem'];
				$totalOtros = $_POST['votosOtros'] + $_POST['contadorOtros'];
		?>
				
				<input type="hidden" name="contadorPri"   value="<?php echo $totalPri; ?>">
				<input type="hidden" name="contadorPan"   value="<?php echo $totalPan; ?>">
				<input type="hidden" name="contadorPrd"   value="<?php echo $totalPrd; ?>">
				<input type="hidden" name="contadorPt"    value="<?php echo $totalPt; ?>">
				<input type="hidden" name="contadorPvem"  value="<?php echo $totalPvem; ?>">
				<input type="hidden" name="contadorOtros" value="<?php echo $totalOtros; ?>">

		<?php
			} 
		?>
		
		<input type="submit" name="Enviar" value="Enviar">


	<?php
		if (isset($_POST['Enviar']))
		{
			if (isset($_POST['votos']))
			{
				echo "<p><h1>Resultados</h1></p>"; 
				echo "Total votos PRI $totalPri<br>";
				echo "Total votos PAN $totalPan<br>";
				echo "Total votos PRD $totalPrd<br>";
				echo "Total votos PT $totalPt<br>";
				echo "Total votos PVEM $totalPvem<br>";
				echo "Total otros votos $totalOtros<br>";

				echo "<p><h1>Partido que lleva la delantera en preferencia electoral</h1></p>"; 
				if ( ($totalPri > $totalPan) && ($totalPri > $totalPrd) && ($totalPri > $totalPt) &&
					 ($totalPri > $totalPvem) && ($totalPri > $totalOtros)) 
				{
					echo "<h2><img src='pri.png'> PRI votos : $totalPri</h2>";
				}

				if ( ($totalPan > $totalPri) && ($totalPan > $totalPrd) && ($totalPan > $totalPt) &&
					 ($totalPan > $totalPvem) && ($totalPan > $totalOtros)) 
				{
					echo "<h2><img src='pan.png'> PAN votos : $totalPan</h2>";
				}

				if ( ($totalPrd > $totalPri) && ($totalPrd > $totalPan) && ($totalPrd > $totalPt) &&
					 ($totalPrd > $totalPvem) && ($totalPrd > $totalOtros)) 
				{
					echo "<h2><img src='prd.png'> PRD votos : $totalPrd</h2>";
				}

				if ( ($totalPt > $totalPri) && ($totalPt > $totalPan) && ($totalPt > $totalPrd) &&
					 ($totalPt > $totalPvem) && ($totalPt > $totalOtros)) 
				{
					echo "<h2><img src='pt.png'> PT votos : $totalPt</h2>";
				}

				if ( ($totalPvem > $totalPri) && ($totalPvem > $totalPan) && ($totalPvem > $totalPrd) &&
					 ($totalPvem > $totalPt) && ($totalPvem > $totalOtros)) 
				{
					echo "<h2><img src='pvem.png'> PVEM votos : $totalPvem</h2>";
				}

				if ( ($totalOtros > $totalPri) && ($totalOtros > $totalPan) && ($totalOtros > $totalPrd) &&
					 ($totalOtros > $totalPt) && ($totalOtros > $totalPvem)) 
				{
					echo "<h2>OTROS PARTIDOS POLÍTICOS votos : $totalOtros </h2>";
				}

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