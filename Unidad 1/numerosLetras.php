<!--
************************************************************************
* Archivo : numeros.php
* Descripción : Convierte números a letras en el rango de 100 a 999
* Fecha : 28-may-2013
* Version : 0.1
* Autor : Lic. Esdras Chuc
************************************************************************
 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Convetir números a letras</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<h1>Universidad Politécnica de Bacalar</h1>
		<h2>Números a letras</h2>
		Escribe el número :  <input type=text name="numero"><br>
		<input type="submit" value="Convertir">
	</form>



	<?php
	if(isset($_POST['numero']))
	{
		 $numero=$_POST['numero'];

		 // Verificar si el número esta en el rango adecuado
		 if (($numero >= 100) and ($numero <= 999))
		 {


		 	// versión larga
		 	/*
		 	$centenas = (int) ($numero / 100);
		 	$decenas = (int) (($numero - ($centenas*100)) / 10);
		 	$unidades = ($numero - ($centenas*100) - ($decenas * 10));
		 	*/

		 	// versión corta
		 	$centenas = (int) ($numero / 100);
		 	$decenas = (int) (($numero % 100) / 10);
		 	$unidades = (($numero % 100) % 10); 

		 	echo "$centenas centena(s) <br>"; 
		 	echo "$decenas decenas(s) <br>"; 
		 	echo "$unidades unidades <br>"; 

		 	echo "<br><br>El número es : ";

		 	// Se presentan los valores
		 	// CENTENAS
		 	if ($centenas == 1)
		 	{
		 		if (($decenas == 0) && ($unidades==0)) 
		 		{ 
		 			echo "Cien "; 
		 		} 
		 		else 
		 		{
		 			echo "Ciento "; 
		 		};
		 	};
		 	if ($centenas == 2) { echo "Doscientos "; };
		 	if ($centenas == 3) { echo "Trecientos "; };
		 	if ($centenas == 4) { echo "Cuatrocientos "; };
		 	if ($centenas == 5) { echo "Quinientos "; };
		 	if ($centenas == 6) { echo "Seicientos "; };
		 	if ($centenas == 7) { echo "Setecientos "; };
		 	if ($centenas == 8) { echo "Ochocientos "; };
		 	if ($centenas == 9) { echo "Novecientos "; };
		 	// DECENAS
		 	if (($decenas == 1) && ($unidades == 0)) { echo "diez"; } ;
		 	if (($decenas == 1) && ($unidades == 1)) { echo "once"; } ;
		 	if (($decenas == 1) && ($unidades == 2)) { echo "doce"; } ;
		 	if (($decenas == 1) && ($unidades == 3)) { echo "trece"; } ;
		 	if (($decenas == 1) && ($unidades == 4)) { echo "catorce"; } ;
		 	if (($decenas == 1) && ($unidades == 5)) { echo "quince";} ;
		 	if (($decenas == 1) && ($unidades == 6)) { echo "dieciseis"; } ;
		 	if (($decenas == 1) && ($unidades == 7)) { echo "diecisiete"; } ;
		 	if (($decenas == 1) && ($unidades == 8)) { echo "dieciocho"; } ;
		 	if (($decenas == 1) && ($unidades == 9)) { echo "diecinueve"; } ;
		 	if ($decenas == 2) { if ($unidades == 0) { echo "veinte"; } else { echo "veinti"; }; };
		 	if ($decenas == 3) { echo "treinta "; };
		 	if ($decenas == 4) { echo "cuarenta "; }; 
		 	if ($decenas == 5) { echo "cincuenta "; }; 
		 	if ($decenas == 6) { echo "sesenta "; };
		 	if ($decenas == 7) { echo "setenta "; }; 
		 	if ($decenas == 8) { echo "ochenta "; }; 
		 	if ($decenas == 9) { echo "noventa "; }; 
		 	if (($decenas > 2) && ($unidades != 0)) { echo "y "; };
		 	// UNIDADES
		 	if ($decenas != 1) 
		 	{
			 	if ($unidades == 1 ) { echo "uno"; } ;
			 	if ($unidades == 2 ) { echo "dos"; } ;
			 	if ($unidades == 3 ) { echo "tres"; } ;
			 	if ($unidades == 4 ) { echo "cuatro"; } ;
			 	if ($unidades == 5 ) { echo "cinco"; } ;
			 	if ($unidades == 6 ) { echo "seis"; } ;
			 	if ($unidades == 7 ) { echo "siete"; } ;
			 	if ($unidades == 8 ) { echo "ocho"; } ;
			 	if ($unidades == 9 ) { echo "nueve"; } ;
			}
		 } 
		 else
		 {
		 	echo "<br>Número o valor inválido, ingresa nuevamente el número...";
		 }; 
	}
	 
	?>
</body>
</html>
