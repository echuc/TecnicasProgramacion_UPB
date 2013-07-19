<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ordenamiento de burbuja</title>
</head>
<body>
	<?php

		$vector[0] = "Israel";
		$vector[1] = "Arys";
		$vector[2] = "Jessica";
		$vector[3] = "Katia";
		$vector[4] = "Darwin";
		$vector[5] = "Cesar";
		$vector[6] = "Domingo";
		$vector[7] = "Castro";
		$vector[8] = "David";

		// Otra manera de hacer un vector
		// $vector = array(20,9,8,7,25,17,2,13,1,3);

		$tamano = sizeof($vector)-1;

		// Imprimir el vector desordenado
		echo "<h1>Ordenamiento de burbuja</h1>";
		echo "<h2>Vector original</h2>";
		for ($i=0;$i<=$tamano;$i++) {
			echo $vector[$i]."<br>";
		}

		// Ordenamos el vector con el método de Burbuja
		for ($i=0;$i<$tamano;$i++) {
			for ($j=0;$j<$tamano-$i;$j++) {
				// Comparamos los valores adyacentes
				if ($vector[$j] > $vector[$j+1]) {
					$intercambio = $vector[$j+1];
					$vector[$j+1]= $vector[$j]; 
					$vector[$j] = $intercambio;
				}
			}
		}

		
		echo "<h2>Vector ordenado</h2>";
		for ($i=0;$i<=$tamano;$i++) {
			echo $vector[$i]."<br>";
		}	

	?>

</body>
</html>