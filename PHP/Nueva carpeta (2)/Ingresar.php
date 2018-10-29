
<!DOCTYPE html>
<html >
<head>


<meta charset="utf-8">
<title>INGRESAR</title>
<!--se hace enlace a los estilos de la pagina-->
<link rel="stylesheet" type="text/css" href="style3.css" />
<!--se hace enlace a los estilos de la fuente de google font-->
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Yellowtail" rel="stylesheet">
<!--se hace enlace a los estilos de iconos-->
<link rel="stylesheet" type="text/css" href="fonts/style.css" />


</head>


<style type="text/css" media="screen"> 
input:hover{background:white ;
	border: solid 2px ;
}
form{float;
	position: absolute;
	margin: 0px 525px;
	top: 80px;
	padding: 10px;
	height: 300px;
	width: 200px;
	background: skyblue;
	border: solid 3px black;
	width:280px


}

</style> 

<body>


		<form  action="Ingresar.php" method="Post">
			<h2>Ingresar</h2>


		<label for="Nombre"></span> Nombre Usuario:</label>
		<br>


		<input type="text" placeholder="Usuario"  name="Nombre"  />
		<br>		

		<label></span>Contraseña:</label>
		<br>

		<input type="password" placeholder="Contraseña"  name="Contraseña" />
		<br><br>

		<input type="submit" value="Enviar" name="Envia" />
		<br>
				
		</form> 


		<?php

		session_start();		
		
			if(isset($_post ["Enviar"])){

			require_once("con_usu.php");

			$us=$_post["Nombre"];
			$co=$_post["Contraseña"];

			$obj = new MetodosUsuario();
			$con =$obj->login($us, $co);
			$num =$con->num_rows;	
			if ($num>0){

				while($sql_d=$con->fetch_assoc()){
					if($sql_d['Rol']==2){
						$_SESSION["NombreUsu"]=$sql_d['Nombre'];
						$_SESSION["Apellido"]=$sql_d['Apellidos_P'];
						header("Location:Usuario1.php");
					}
					else if ($sql_d['Rol']==3){
						$_SESSION["NombreUsu"]=$sql_d['Nombre'];
						$_SESSION["Apellido"]=$sql_d['Apellidos_P'];
						header("Location:Usuario2.php");
					}
					else if ($sql_d['Rol']==1){
						$_SESSION["NombreUsu"]=$sql_d['Nombre'];
						$_SESSION["Apellido"]=$sql_d['Apellidos_P'];
						header("Location:Admin.php");
					}
				}
			}

		}

		?>


</body>
</html>


			