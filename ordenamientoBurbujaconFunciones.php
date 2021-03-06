<!-- 
Descripción : Ordemiento con el método de Burbuja usando funciones
-->
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

		$tamano = sizeof($vector)-1	;

		// Imprime el vector desordenado
		echo "<h1>Ordenamiento de burbuja</h1>";

		// Imprime el vector desordenado
		imprimeVector('Vector Orginal',$vector,$tamano);

		// Llamar a la función de ordenamiento tipo burbuja
		$vector = ordamientoBurbuja($vector,$tamano);

		// Imprimir el vector ordenado
		imprimeVector('Vector Ordenado',$vector,$tamano);

		// función que imprime un vector
		function imprimeVector($titulo,$nombreVector,$tamano)
		{
			// se imprime el título
			echo "<h2>$titulo</h2>";
			// se imprime el vector
			for ($i=0;$i<=$tamano;$i++) {
				echo $nombreVector[$i]."<br>";
			}
		}


		// funcion que ordena un vector con el método de burbuja
		// Parámetros $nombreVector y $tamano
		function ordamientoBurbuja($nombreVector,$tamano)
		{
			for ($i=0;$i<$tamano;$i++) {
				for ($j=0;$j<$tamano-$i;$j++) {
					// Comparamos los valores adyacentes
					if ($nombreVector[$j] > $nombreVector[$j+1]) {
						$intercambio = $nombreVector[$j+1];
						$nombreVector[$j+1]= $nombreVector[$j]; 
						$nombreVector[$j] = $intercambio;
					}  // fin del if
				} // fin del for $j
			} // fin del for $i
			// devolver el vector ordenado
			return $nombreVector;
		} // fin de la función




	?>

</body>
</html>