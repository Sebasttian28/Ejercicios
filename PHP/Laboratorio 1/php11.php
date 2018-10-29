<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="css/Estilos.css">
</head>
 
<body>
<center>

<form action="php11.php" method="post">
<font color="black" size="50pt" face="Calibri">

<div id="eje11">
<p><br>Reloj Digital</p>
</font> 
<font  face="Calibri">


  <input type="submit" name="act" value="Actualizar"><br><br>

<?php

date_default_timezone_set('America/Bogota');
$horas = date('G');
$minutos = date('i');
$segundos = date('s');
$ampm = date('a');

?>

<div id="gmtdatetime"> 
<form name="crono">

<p align="center">
	<input id="gmttime" type="text" name="displayh"
	 value="<?=$horas?>:<?=$minutos?> :<?=$segundos?> <?=$ampm?>" 
	 style="background-color:transparent;
	 float:left;
	 border:none;
	 outline:none;
	 width:415px;
	 height:40px;
	 text-align:center;"> </p>

</form> 
</div>
</div>

<br>
<br>

</font>
</form>
</center>
</body>
</html>