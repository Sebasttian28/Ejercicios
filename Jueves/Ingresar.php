
<!DOCTYPE html>
<html >
<head>


<meta charset="utf-8">
<title>iNGRESAR</title>
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


		<form  action="" method="Post">
			<h2>Ingresar</h2>


		<label for="Nombre"></span> Nombre Usuario:</label>
		<br>


		<input type="text" placeholder="Usuario" required="" id="nombre" name="Nombre"  />
		<br>		

		<label></span>Contraseña:</label>
		<br>

		<input type="password" placeholder="Contraseña" required="" id="pass"" name="Contraseña" />
		<br><br>

		<input type="submit" value="Enviar" name="Enviar" />
		<br>
				
		</form> 


		<?php

		session_start();

			if(isset($_post ["Enviar"])){

			require_once("con_usu.php");

			$us=$_post["Usuario"];
			$co=$_post["Contraseña"];

			$obj = new MetodosUsuario();
			$con =$obj->login($us, $co);
			$num =$con->num_rows;	
			echo $num;

		}



		?>

		

</body>
</html>