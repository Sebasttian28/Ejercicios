<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Clase Automovil</title>
</head>
<body>

<?php
include ("clase.php");
$Mazda= new Automovil();
$Mazda->andar();
$Mazda->color="<br>Azul<br>";
echo "</br>".$Mazda->color;
echo "</br>".$Mazda->ruedas;	
$Mazda->establece_color("<br>Rojo<br>");

$volvo=new Camion();

echo "El camion tiene ".$Mazda->ruedas ." ruedas<br>";
echo "El color del camion es ".$volvo->color;
echo "<br>transmision del camion es de ".$volvo->transmision;
?>

</body>
</html>