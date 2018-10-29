<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<center>
<form action="ej11.php" method="post">
<font color="#77E0FE" size="40pt" face="Arial">
<p>RELOJ DIGITAL</p>
</font>
<font  face="Arial">


  <input type="submit" name="validar" value="CARGAR"><br><br>

<?php
date_default_timezone_set('America/Bogota');
$horas = date('G');
$minutos = date('i');
$segundos = date('s');
$ampm = date('a');

?>

<div id="gmtdatetime"> 
<form name="crono">
<p align="center"><input id="gmttime" type="text" name="displayh" value="<?=$horas?>:<?=$minutos?> :<?=$segundos?> <?=$ampm?>" style="background-color:transparent;float:left;border:none;outline:none;width:415px;height:40px;text-align:center;"></p>
</form> 
</div>

<br>
<br>

</font>
</form>
</center>
</body>
</html>
