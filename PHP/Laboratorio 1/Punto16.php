<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css" media="screen">
h1{
	text-align: center;
	color: white;
	font-family: Kristen ITC;
}
body  {
	background:linear-gradient(to right,#F87E29,red,#F87E29);
}
#pi{
	position: absolute;
	top: 100px;
	left: 250px;
}
#pa{
	position: absolute;
	top: 100px;
	left: 550px;
}
#ti{
	position: absolute;
	top: 100px;
	left: 850px;
}
#a{
	position: absolute;
	top: 400px;
	left: 550px;
}
</style>
<?php

if ($_POST){
//Incrementamos el valor
$conta = $_POST["conta"] + 1;
}
else{
//Valor inicial
$conta = 0;
}			
?>
<body>
	<form action="Punto16.php#caja1" method="Post">
<div id="caja1">
	

<h1>Piedra Papel Tijera</h1>
<div id="pi">
<input type="image" name="Piedra" src="Piedra.png" width="200" height="200"  value="1">
<input type="hidden" name="conta" value="<?=$conta?>">
</div>
<BR>
<BR>
<div id="pa">
<input type="image" name="Papel" src="Papel.png" width="200" height="200"  value="2">
<input type="hidden" name="conta" value="<?=$conta?>">
</div>
<BR>
<BR>
<div id="ti">
<input type="image" name="Tijera" src="Tijera.png" width="200" height="200" value="3">
<input type="hidden" name="conta" value="<?=$conta?>">
</div>
<div>
<input type="submit" name="bo" value="Terminar">
</div>
<?php



if ((isset($_POST['Piedra']))||(isset($_POST['Papel']))||(isset($_POST['Tijera']))) {

if (isset($_POST['Piedra'])) {
	$pies=$_POST['Piedra'];

$ran=mt_rand(1,3);

if ($ran==1){
	echo "<img src='Piedra.png' id='a'>";
}
elseif ($ran==2){
	echo "<img src='Papel.png' id='a'>";
}
elseif ($ran==3){
	echo "<img src='Tijera.png' id='a'>";
}

if ($pies==$ran && $ran==1) {
	echo "Empate";
}
else if ($pies!==$ran && $ran==2) {
	echo "Gano Maquina";
}
else if ($pies!==$ran && $ran==3) {
	echo "Gano Usuario";
}
}
else if(isset($_POST['Papel'])) {
	$pape=$_POST['Papel'];

$ran=mt_rand(1,3);

if ($ran==1){
	echo "<img src='Piedra.png' id='a'>";
}
elseif ($ran==2){
	echo "<img src='Papel.png' id='a'>";
}
elseif ($ran==3){
	echo "<img src='Tijera.png' id='a'>";
}

if ($pape==$ran && $ran==2) {
	echo "Empate";
}
else if ($pape!==$ran && $ran==3) {
	echo "Gano Maquina";
}
else if ($pape!==$ran && $ran==1) {
	echo "Gano Usuario";
}
}
else if(isset($_POST['Tijera'])) {
	$tije=$_POST['Tijera'];

$ran=mt_rand(1,3);

if ($ran==1){
	echo "<img src='Piedra.png' id='a'>";
}
elseif ($ran==2){
	echo "<img src='Papel.png' id='a'>";
}
elseif ($ran==3){
	echo "<img src='Tijera.png' id='a'>";
}

if ($tije==$ran && $ran==3) {
	echo "Empate";
}
else if ($tije!==$ran && $ran==1) {
	echo "Gano Maquina";
}
else if ($tije!==$ran && $ran==2) {
	echo "Gano Usuario";
}

}
}
echo "$conta";
?>
</div>
	</form>
</body>
</html>