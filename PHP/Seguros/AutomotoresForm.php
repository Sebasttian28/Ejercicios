<?php

require_once("Automotores.php");
require_once("Tipos_Automotores.php");
?>

<!DOCTYPE html>
<html>
<head> 
	<title>Automotores</title>
</head>
<body>

	<?php
	$mos= new MetodoAutomotores();
	$consulta=$mos->Automotores();

echo "
	
	<table>
	<tr>

	<th>Placa</th>
	<th>Marca</th>
	<th>Tipo</th>
	<th>Modelo</th>
	<th>Cantidad de Pasajeros</th>
	<th>Cilindraje</th>
	<th>Numero de chazis</th>

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


<br>
<P>Consultar </P>
<form action="" method="get">
	<br> 
	<input type="text" name="Plac">
	<input type="submit" name="Consul" value="Consultar">
	<br>
	<br>
	<?php
	if (isset($_GET['Consul'])){
		$id=$_GET['Plac'];
		$consulta=$mos->Mostrar_1_Aut($id);
	
echo "

	<table>
	<tr>

	<th>Placa</th>
	<th>Marca</th>
	<th>Tipo</th>
	<th>Modelo</th>
	<th>Cantidad de Pasajeros</th>
	<th>Cilindraje</th>
	<th>Numero de chazis</th>
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


	<br>
	</form>
	<form action="" method="Post">
	
	<P><label>Placa </label><input type="text" name="Pla" placeholder="Digitar la Placa"></P>
	<P><label>Marca </label><input type="text" name="Mar" placeholder="Digitar la Marca"></P>
	<P><label>Tipo </label><select name="Tip">
	</form>

		<?php

		$plac= new MetodoTipos_Automotores();

		$res= $plac->Tipos_Automotores();

		while ($f=mysqli_fetch_row($res)) {
		
		echo "<option value='".$f[0]."'>".$f[0]."</option>";

		}

		?>

	</select></P>

	<P><label>Modelo </label><input type="text" name="Mod" placeholder="Digitar el Modelo"></P>
	<P><label>Numero de Pasajeros </label><input type="text" name="Pas" placeholder="Digite el Numero de Pasajeros"></P>
	<P><label>Cilindraje </label><input type="text" name="Cil" placeholder="Digitar el Cilindraje"></P>
	<P><label>Chasis </label><input type="text" name="Cha" placeholder="Digitar el Chasis"></P><br>
	<input type="submit" name="Inser" value="Insertar">
	<br>
	<br>

<?php

if (isset($_POST['Inser'])) {
	$do=$_POST['Pla'];
	$no=$_POST['Mar'];
	$co=$_POST['Tip'];
	$ro=$_POST['Mod'];
	$es=$_POST['Pas'];
	$fo=$_POST['Cil'];
	$za=$_POST['Cha'];
	$mens=$mos->Insert_Aut($do,$no,$co,$ro,$es,$fo,$za);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	
}

?>

</form>

<br>
<P>Modificar </P>
<form action="" method="Post">
	<br>
	<input type="text" name="Plac2">
	<input type="submit" name="Consul2" value="Consultar">
	<br>
	<br>
</form>

	<?php

	if (isset($_POST['Consul2'])){
		$id=$_POST['Plac2'];
		$consulta=$mos->Mostrar_1_Aut($id);
	
	while($f=$consulta->fetch_row()){

	echo "

	<P>Codigo <select name='Pla2'>
		
		<option value='".$id."'>".$id."</option>;
		
	</select></P>
	<P>Marca <input type='text' name='Mar2' value='".$f[1]."'></P>
	<P>Tipo <select name='Tip2'>"

	?>
		<?php

		$plac= new MetodoTipos_Automotores();

		$res= $plac->Tipos_Automotores();

		while ($a=mysqli_fetch_row($res)) {
		
		echo "<option value='".$a[0]."'>".$a[0]."</option>";
		}

		?>

		<?php

		echo "
	</select></P>
	<P>Modelo <input type='text' name='Mod2' value='".$f[3]."'></P>
	<P>Numero de Pasajeros <input type='text' name='Pas2' value='".$f[4]."'></P>
	<P>Cilindraje <input type='text' name='Cil2' value='".$f[5]."'></P>
	<P>Chasis <input type='text' name='Cha2' value='".$f[6]."'></P>
	<input type='submit' name='Mod' value='Modificar'>

	";

	}
	
	}

	if (isset($_POST['Mod'])) {
	$do=$_POST['Pla2'];
	$no=$_POST['Mar2'];
	$co=$_POST['Tip2'];
	$ro=$_POST['Mod2'];
	$es=$_POST['Pas2'];
	$fo=$_POST['Cil2'];
	$za=$_POST['Cha2'];
	$mens=$mos->Modi_Aut($no,$co,$ro,$es,$fo,$za,$do);

	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
	
}

	?>


</form>
</body>
</html>
