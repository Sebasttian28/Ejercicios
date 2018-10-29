<?


require_once("Incidentes.php");
require_once("Automotores.php");?>

<!DOCTYPE html>
<html>
<head>

	<title></title>

</head>
<body>

	<?php
	$mos= new MetodoIncidentes();
	$consulta=$mos->Incidentes();

echo "

	<table>
	<tr>

	<th>Codigo</th>
	<th>Fecha</th>
	<th>Placa</th>
	<th>Lugar</th>
	<th>Cantidad de Heridos</th>
	<th>Cantidad de Fatalidades</th>
	<th>Autos Involucrados</th>
	</tr>
	";

	while($a=$consulta->fetch_row()){
	echo "

	<tr>

	<th>".$a[0]."</th>
	<th>".$a[1]."</th>
	<th>".$a[2]."</th>
	<th>".$a[3]."</th>
	<th>".$a[4]."</th>
	<th>".$a[5]."</th>
	<th>".$a[6]."</th>
	</tr>
	";

	}
	echo "</table>";
	
?>

</BR>
<P>Consultar Aseguramientos</P>
<form action="" method="get">
	</BR>
	<input type="text" name="Codi">
	<input type="submit" name="Consul" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_GET['Consul'])){
		$id=$_GET['Codi'];
		$consulta=$mos->Mostrar_1_Inc($id);
	
echo "

	<table>
	<tr>

	<th>Codigo</th>
	<th>Fecha</th>
	<th>Placa</th>
	<th>Lugar</th>
	<th>Cantidad de Heridos</th>
	<th>Cantidad de Fatalidades</th>
	<th>Autos Involucrados</th>
	</tr>";
	while($f=$consulta->fetch_row()){

	echo "

	<tr>

	<th>".$f[0]."</th>
	<th>".$f[1]."</th>
	<th>".$f[2]."</th>
	<th>".$f[3]."</th>
	<th>".$f[4]."</th>
	<th>".$f[5]."</th>
	<th>".$f[6]."</th>
	</tr>
	";
	}
	echo "</table>";
	}
	?>
</form>
<form action="" method="Post">
	
	<P><label>Codigo </label><input type="text" name="Cod" placeholder="Digite el Codigo"></P>
	<P><label>Fecha </label><input type="text" name="Fec" placeholder="Digite la Fecha"></P>
	<P><label>Placa </label><select name="Pla">
		<?php
		$plac= new MetodoAutomotores();

		$res= $plac->AutoPlaca();

		while ($f=mysqli_fetch_row($res)) {
		
		echo "<option value='".$f[0]."'>".$f[0]."</option>";
		}
		?>
	</select></P>
	<P><label>Lugar </label><input type="text" name="Lug" placeholder="Digite el Lugar"></P>
	<P><label>Heridos </label><input type="text" name="Her" placeholder="Digite la Cantidad de Heridos"></P>
	<P><label>Fatalidades </label><input type="text" name="Fat" placeholder="Digite la Cantidad de Fatalidades"></P>
	<P><label>Autos Involucrados </label><input type="text" name="Aut" placeholder="Digite los Autos Involucrados"></P>
	<input type="submit" name="Inser" value="Insertar">
	</BR>
	</BR>
<?php
if (isset($_POST['Inser'])) {
	$do=$_POST['Cod'];
	$no=$_POST['Fec'];
	$co=$_POST['Pla'];
	$ro=$_POST['Lug'];
	$es=$_POST['Her'];
	$fo=$_POST['Fat'];
	$za=$_POST['Aut'];
	$mens=$mos->Insert_Inc($do,$no,$co,$ro,$es,$fo,$za);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";

}

?>

</form>


</BR>
<P>Consultar Aseguramientos</P>
<form action="" method="Post">
	</BR>
	<input type="text" name="Codi2">
	<input type="submit" name="Consul2" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_POST['Consul2'])){
		$id=$_POST['Codi2'];
		$consulta=$mos->Mostrar_1_Inc($id);
	
	while($f=$consulta->fetch_row()){

	echo "

	<P>Codigo <select name='Cod2'>
		
		<option value='".$id."'>".$id."</option>;
		
	</select></P>
	<P>Fecha <input type='text' name='Fec2' value='".$f[1]."'></P>
	<P>Placa <select name='Pla2'>"
		?>
		<?php
		$plac= new MetodoAutomotores();

		$res= $plac->AutoPlaca();

		while ($a=mysqli_fetch_row($res)) {
		
		echo "<option value='".$f[2]."'>".$a[0]."</option>";
		}
		?>
		<?php
		echo "
	</select></P>
	<P>Lugar <input type='text' name='Lug2' value='".$f[3]."'></P>
	<P>Heridos <input type='text' name='Her2' value='".$f[4]."'></P>
	<P>Fatalidades <input type='text' name='Fat2' value='".$f[5]."'></P>
	<P>Autos Involucrados <input type='text' name='Aut2' value='".$f[6]."'></P>
	<input type='submit' name='Mod' value='Modificar'>
	
	";
	}
	}
	if (isset($_POST['Mod'])) {
	$do=$_POST['Cod2'];
	$no=$_POST['Fec2'];
	$co=$_POST['Pla2'];
	$ro=$_POST['Lug2'];
	$es=$_POST['Her2'];
	$fo=$_POST['Fat2'];
	$za=$_POST['Aut2'];
	$mens=$mos->Modi_Inc($no,$co,$ro,$es,$fo,$za,$do);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	//echo $mens;
	}

	?>
</form>

</body>
</html>
