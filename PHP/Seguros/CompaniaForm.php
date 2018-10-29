<?php
require_once("Compania.php")?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$mos= new MetodoCompania();
	$con=$mos->Compania();

echo "

	<table>
	<tr>

	<th>Nit</th>
	<th>Nombre</th>
	<th>Año de fundacion</th>
	<th>Representante Legal</th>
	</tr>
	";

	while($a=mysqli_fetch_row($con)){
	echo "

	<tr>

	<th>".$a[0]."</th>
	<th>".$a[1]."</th>
	<th>".$a[2]."</th>
	<th>".$a[3]."</th>
	</tr>
	";

	}
	echo "</table>";
	
?>

</BR>
<P>Consultar Aseguramientos</P>
<form action="" method="get">
	</BR>
	<input type="text" name="Ni">
	<input type="submit" name="Consul" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_GET['Consul'])){
		$id=$_GET['Ni'];
		$consult=$mos->Mostrar_1_Com($id);
	
echo "

	<table>
	<tr>

	<th>Nit</th>
	<th>Nombre</th>
	<th>Año de fundacion</th>
	<th>Representante Legal</th>
	</tr>";

	while($f=mysqli_fetch_row($consult)){

	echo "

	<tr>

	<th>".$f[0]."</th>
	<th>".$f[1]."</th>
	<th>".$f[2]."</th>
	<th>".$f[3]."</th>
	</tr>
	";
	}
	echo "</table>";
	}
	?>
</form>
<form action="" method="Post">
	
	<P><label>Nit </label><input type="text" name="Ni" placeholder="Digite el Nit"></P>
	<P><label>Nombre </label><input type="text" name="No" placeholder="Digite el Nombre"></P>
	<P><label>Año Fundacion </label><input type="text" name="Fu" placeholder="Digite el Año de Fundacion"></P>
	<P><label>Representante Legal </label><input type="text" name="Re" placeholder="Digite el Representante Legal"></P>
	<input type="submit" name="Inser" value="Insertar">
	</BR>
	</BR>
<?php
if (isset($_POST['Inser'])) {
	$do=$_POST['Ni'];
	$no=$_POST['No'];
	$co=$_POST['Fu'];
	$ro=$_POST['Re'];
	$mens=$mos->Insert_Com($do,$no,$co,$ro);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	//echo $mens;
}
?>
</form>

</BR>
<P>Consultar Aseguramientos</P>
<form action="" method="Post">
	</BR>
	<input type="text" name="Nit2">
	<input type="submit" name="Consul2" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_POST['Consul2'])){
		$id=$_POST['Nit2'];
		$consult=$mos->Mostrar_1_Com($id);
	

	while($f=mysqli_fetch_row($consult)){

	echo "

	<P>Nit <select name='Ni2'>
		
		<option value='".$id."'>".$id."</option>;
		
	</select></P>
	<P>Nombre <input type='text' name='No2' value='".$f[1]."'></P>
	<P>Año Fundacion <input type='text' name='Fu2' value='".$f[2]."'></P>
	<P>Representante Legal <input type='text' name='Re2' value='".$f[3]."'></P>
	<input type='submit' name='Mod' value='Modificar'>
	
	";
	}
	}
	if (isset($_POST['Mod'])) {
	$do=$_POST['Ni2'];
	$no=$_POST['No2'];
	$co=$_POST['Fu2'];
	$ro=$_POST['Re2'];
	$mens=$mos->Modi_Com($no,$co,$ro,$do);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	//echo $mens;
}
	?>
</form>

</body>
</html>
