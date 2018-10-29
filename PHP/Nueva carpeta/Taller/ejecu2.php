<!DOCTYPE html>
<html>
<head>
	<title>punto 2</title>
</head>
<body>
<?php 
include("punto 2.php");
$num=21312321;
$tipo="credito";
$vali=100000;
$valtrans=40000;
$trans="retirar";
$salac=transaccion($valtrans,$trans,$vali);
$salmin=saldomini($vali);
echo "<h1>su cuenta $num es una cuenta de ".tipo($tipo)."</h1>";
echo "<h1> su saldo minimo es ".saldomini($vali)."</h1>";

echo "<h1> su transaccion es $trans y es de un valor de $valtrans y su saldo actual es ".transaccion($valtrans,$trans,$vali)."</h1>";
echo "<h1>su saldo actual es ".saldoac($salac)."</h1>";
echo "<h1>su saldo minimo es ".saldomin($salmin)."</h1>";
echo "<h1>su capacidad de credito es ".capcredito($tipo,$salac,$salmin)."</h1>";
?>
</body>
</html>