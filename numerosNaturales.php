<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Números naturales en HTML</title>
	</head>
	<body>
		<h1>Universidad Politécnica de Bacalar</h1>
		<h2>Números naturales</h2>

		<?php
		if(isset($_POST['Solucionar']))
		{
		    $numero = $_POST['numero'];
		    echo "Has escrito el numero : <b> $numero </b><br>";
		    $suma = $numero * ($numero+1) / 2;
		    echo "La suma de los numeros naturales del <b>1</b> al .. $numero es : <b> $suma </b>";
		    echo "<br><br>Si deseeas puedes escribir otro numero.";
		}
		?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		   Escribe el número <input type="text" name="numero"><br>
		   <input type="submit" name="Solucionar" value="Solucionar"><br>
		</form>

	</body>
</html>