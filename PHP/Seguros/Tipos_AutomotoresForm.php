<?php

require_once("Tipos_Automotores.php")?>
<!DOCTYPE html>

<html>
<head>

	<title></title>
	
</head>
<body>
	<?php
	$mos= new MetodoTipos_Automotores();
	$consulta=$mos->Tipos_Automotores();

echo "

	<table>
	<tr>

	<th>Tipo</th>
	<th>Nombre</th>
	</tr>
	";

	while($a=$consulta->fetch_row()){
	echo "

	<tr>

	<th>".$a[0]."</th>
	<th>".$a[1]."</th>
	</tr>
	";

	}
	echo "</table>";
	
?>

</BR>
<P>Consultar Aseguramientos</P>
<form action="" method="get">
	</BR>
	<input type="text" name="Tip">
	<input type="submit" name="Consul" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_GET['Consul'])){
		$id=$_GET['Tip'];
		$consulta=$mos->Mostrar_1_Tpa($id);
	
echo "

	<table>
	<tr>

	<th>Tipo</th>
	<th>Nombre</th>
	</tr>";
	while($f=$consulta->fetch_row()){

	echo "

	<tr>

	<th>".$f[0]."</th>
	<th>".$f[1]."</th>
	</tr>
	";
	}
	echo "</table>";
	}
	?>
</form>
<form action="" method="Post">
	
	<P><label>Tipo </label><input type="text" name="Tip" placeholder="Digite el Tipo"></P>
	<P><label>Nombre </label><input type="text" name="Nom" placeholder="Digite el Nombre"></P>
	<input type="submit" name="Inser" value="Insertar">
	</BR>
	</BR>
<?php
if (isset($_POST['Inser'])) {
	$do=$_POST['Tip'];
	$no=$_POST['Nom'];
	$mens=$mos->Insert_Tpa($do,$no);
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
	<input type="text" name="Tipo2">
	<input type="submit" name="Consul2" value="Consultar">
	</BR>
	</BR>
	<?php
	if (isset($_POST['Consul2'])){
		$id=$_POST['Tipo2'];
		$consulta=$mos->Mostrar_1_Tpa($id);
	
	while($f=$consulta->fetch_row()){

	echo "

	<P>Nit <select name='Tip2'>
		
		<option value='".$id."'>".$id."</option>;
		
	</select></P>
	
	<P>Nombre <input type='text' name='Nom2' value='".$f[1]."'></P>
	<input type='submit' name='Mod' value='Modificar'>
	
	";
	}
	}
	if (isset($_POST['Mod'])) {
	$do=$_POST['Tip2'];
	$no=$_POST['Nom2'];
	$mens=$mos->Modi_Tpa($no,$do);
	echo "<script type='text/javascript'>
	alert('".$mens."');
	</script>";
}

	?>
</form>

</body>
</html>
