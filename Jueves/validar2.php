<!DOCTYPE html>
<html>
<head>
	<title>Mi primer formulario</title>
</head>
<style type="text/css" media="screen">
p
{float;
	position: absolute;
	margin: 0px 525px;
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

class Cita
{

var $numero;
var $tipo;
var $tarifa;
var $valorfinal;


function Cita() // constructor
{
$this->numero=;
$this->tipo=;
$this->tarifa=;	
}

$nombre=$_GET['Nombre'];
echo "Sr(a): $nombre";
echo "<br>";
$edad=$_GET['edad'];
echo "Edad: $edad";
echo "<br>";
$doc=$_GET['doc'];
echo "Numero de documento: $doc";
echo "<br>";
$tipo=$_GET['cita'];
echo "TTipo de cita: $cita";
echo "<br>";

?>

<button><a href= http://localhost/PHP/Cita.html>Regresar</a></button>
</p>              
</body>
</html>
