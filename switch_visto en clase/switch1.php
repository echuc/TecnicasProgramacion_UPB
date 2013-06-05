<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Escribe nombre de lista:  <input type=text name="nombre"><br>
		<input type="submit" value="Convertir">
</form>
<?php
	if(isset($_POST['nombre']))
	{
		$nombre=$_POST['nombre'];
        switch($nombre)
        {
            case "Jose":
                echo "Hola Jose, tu estas reprobado";
                 break;
            case "Cesar":
                echo "Hola cesar, tu pasaste a mejor vida";
                break;
            default:
                echo "No es un estudiante de la Ing. En software";
            }
    }
?>


</body>
</html>