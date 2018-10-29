<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Clase Automovil</title>
</head>
<body>

<?php
include ("clase.php");
echo "<h1>";
$Mazda= new Automovil();
$Mazda->andar();
$Mazda->color="Azul";
echo "</br>".$Mazda->color;
echo "</br>".$Mazda->ruedas;	
$Mazda->establece_color("Rojo");

$volvo=new Camion();

echo "El camion tiene ".$volvo->ruedas ." ruedas";
echo "El color del camion es ".$volvo->color;
echo "transmision del camion es de ".$volvo->transmision;
?>
</body>
</html>