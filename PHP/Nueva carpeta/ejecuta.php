<!DOCTYPE html> 
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejecutar</title>
	<link rel="stylesheet" href="css/jestilos.css">
</head>
<body>
<h1>Operacion</h1>


<?php

include 'operaciones.php';

$r = operaciones(5, 7, "Sumar");
echo "La suma de 5 y 7 es :".$r . "<br><br>";

$r = operaciones(10, 1, "Restar");
echo "La resta de 10 y 1 es :".$r . "<br><br>";

$r = operaciones(10, 10, "Multiplicar");
echo "La multiplicacion de 10 y 10 es :".$r . "<br><br>";

		$n = incrementar();
		echo $numero

?>

