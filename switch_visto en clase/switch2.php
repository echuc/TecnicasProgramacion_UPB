<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Calendario, escribe el deporte (Mayúsculas):  
        <input type=text name="deporte"><br>
        <input type="submit" value="Convertir">
</form>
<?php
    if(isset($_POST['deporte']))
    {
          $deporte=$_POST['deporte'];
switch($deporte)
{
    case 'FUTBOL':
        echo "El próximo partido UPB vs UQROO : 30 mayo 2013";
        break;
    case 'BASQUETBOL':
        echo "El próximo partido UPB vs NORMAL : 1 junio 2013";
        break;
    default:
        echo "Escribe un deporte válido";
}
}
?>



</body>
</html>