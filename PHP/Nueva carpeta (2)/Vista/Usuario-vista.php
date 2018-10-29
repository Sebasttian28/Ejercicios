<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
</head>
<body>

<form action="../Controlador/Usuario-control.php" method="POST">
	<center>
	<br>
	<input type="text" value=""><br>
	<input type="submit" name="uno" value="Un dato"><br>	
	<input type="submit" name="todos" value="Todos los datos">
	</center>


<?php

if(isset($_POST['todos'])){

	echo "

<table>
<tr>  

<th>Documento </th>
<th>Nombre de Usuario </th>
<th>Contraseña </th>
<th>Rol</th>
<th>Estado</th>
<th>Foto</th>
</tr>";

	while($f=mysqli_fetch_row($result)){

		echo "
<tr>  
<th>".$f[0]."</th>
<th>".$f[1]."</th>
<th>".$f[2]."</th>
<th>".$f[3]."</th>
<th>".$f[4]."</th>
<th>".$f[5]."</th>
</tr>";
    }
    echo"</table>";
	}


?>

</form>
</body>
</html>