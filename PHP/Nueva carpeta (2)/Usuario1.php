<!DOCTYPE html>
<html >
<head>
	<body>

		<h1>Usuario 1</h1>

		<?php

		session_start();

		if ($_session){
			echo '<script type="text/Script> alter("Usuario no Actualizado")gelf.location="Ingresar.php"</script>';
			
		}

		else {
			$usu=$_SESSION["NombreUsu"];
			$ape=$_SESSION["Apellido"];
			echo "<h1> Bienvenido:". $usu " "$ape"</h1>"; 
		}

		?>

		<a href="center.php">Cerrar Sesion</a> 


	</body>
</head>
</html>