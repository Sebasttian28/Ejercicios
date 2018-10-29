<!DOCTYPE html>
<html>
<head>
	<title>Mi primer formulario</title>
</head>
<style type="text/css" media="screen">
p
{float;
	position: absolute;
	margin: 0px 465px;
	top: 80px;
	padding: 10px;
	height: 200px;
	width: 200px;
	background: skyblue;
	border: solid 3px black;
	width:280px
}
</style>
<body>
<p>	
<?php

$nombre =$_POST['nombre'];
echo "Sr(a): $nombre";
echo "<br>";
$edad =$_POST['edad'];
echo  "Su edad es : $edad años";
echo "<br>";
$fecha =$_POST['fecha'];
echo  "La fecha de su vuelo es : $fecha ";
echo "<br>";
$correo =$_POST['correo'];
echo "E-mail: $correo";
echo "<br>";
?>

<button><a href= http://localhost/Jueves/Formulario.html>Regresar</a></button>
</p>
</body>
</html>
	

