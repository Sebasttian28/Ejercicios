<?php
require_once("Aseguramientos.php");
require_once("Automotores.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aseguramientos</title>

</head>
<style type="text/css" media="screen"> 


}
#todo{
	background-color: yellow;

}

</style>






<body>
<div id="todo">
	<?php
	$mos= new MetodoAseguramientos();
	$consulta=$mos->Aseguramientos();

echo "

	<table>
	<tr>

	<th>Codigo</th>
	<th>Fecha Inicio</th>
	<th>Fecha Expiracion</th>
	<th>Valor Asegurado</th>
	<th>Estado</th>
	<th>Costo</th>
	<th>Placa</th>
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

</br>
<P>Consultar </P>                                                    
<form action="" method="get">
	</br>
	<input type="text" name="Codi"> 
	<input type="submit" name="Consul" value="Consultar">
	</br>
	</br>
	<?php
	if (isset($_GET['Consul'])){
		$id=$_GET['Codi'];
		$consulta=$mos->Mostrar_1_Ase($id);
	
echo "

	<table>
	<tr>

	<th>Codigo</th>
	<th>Fecha Inicio</th>
	<th>Fecha Expiracion</th>
	<th>Valor Asegurado</th>
	<th>Estado</th>
	<th>Costo</th>
	<th>Placa</th>
	</tr>
	";
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
	
	<P><label>Codigo 
	</label><input type="text" name="Cod" placeholder="Codigo"></P>
	<P><label>Fecha de inicio 
	</label><input type="text" name="Ini" placeholder=" Fecha de inicio"></P>
	<P><label>Fecha expiracion 
	</label><input type="text" name="Exp" placeholder="Fecha de expiracion"></P>
	<P><label>Valor Seguro 
	</label><input type="text" name="Val" placeholder="Valor Seguro"></P>
	<P><label>Estado 
	</label><input type="text" name="Est" placeholder="Estado"></P>
	<P><label>Costo 
	</label><input type="text" name="Cos" placeholder="Costo"></P>
	<P><label>Placa </label><select name="Pla">
		<?php
		$plac= new MetodoAutomotores();

		$res= $plac->AutoPlaca();

		while ($f=mysqli_fetch_row($res)) {
		
		echo "<option value='".$f[0]."'>".$f[0]."</option>";
		}
		?>
	</select></P>
	<br><input type="submit" name="Inser" value="Insertar">
	<br>
	<br>
<?php
if (isset($_POST['Inser'])) {
	$do=$_POST['Cod'];
	$no=$_POST['Ini'];
	$co=$_POST['Exp'];
	$ro=$_POST['Val'];
	$es=$_POST['Est'];
	$fo=$_POST['Cos'];
	$za=$_POST['Pla'];
	$mens=$mos->Insert_Ase($do,$no,$co,$ro,$es,$fo,$za);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	//echo $mens;
}
?>
</form>

Modificar
<form action="" method="Post">
	<br>
	<input type="text" name="Codi2">
	<input type="submit" name="Consul2" value="Consultar">
	<br>
	<br>
	<?php
	if (isset($_POST['Consul2'])){
		$id=$_POST['Codi2'];
		$consulta=$mos->Mostrar_1_Ase($id);
	
while($f=$consulta->fetch_row()){

	echo "
	<P>Codigo <select name='Codi'>
		
		<option value='".$id."'>".$id."</option>;
		
	</select></P>

	<P>Fecha Inicio <input type='text' name='Ini2' value='".$f[1]."'></P>
	<P>Fecha Expiracion <input type='text' name='Exp2' value='".$f[2]."'></P>
	<P>Valor Asegurado <input type='text' name='Val2' value='".$f[3]."'></P>
	<P>Estado <input type='text' name='Est2' value='".$f[4]."'></P>
	<P>Costo <input type='text' name='Cos2' value='".$f[5]."'></P>
	<P>Placa <input type='text' name='Pla2' value='".$f[6]."'>

	<input type='submit' name='Mod' value='Modificar'>
	";

	
	}

	}
	if (isset($_POST['Mod'])) {
	$do2=$_POST['Codi'];
	$no2=$_POST['Ini2'];
	$co2=$_POST['Exp2'];
	$ro2=$_POST['Val2'];
	$es2=$_POST['Est2'];
	$fo2=$_POST['Cos2'];
	$za2=$_POST['Pla2'];
	$mens=$mos->modi_Ase($no2,$co2,$ro2,$es2,$fo2,$za2,$do2);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	
}
	?>
</form>
</div>

</body>
</html>
