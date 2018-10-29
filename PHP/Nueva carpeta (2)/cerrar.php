<?php

session_start();
$us=$_post["Nombre"];
$co=$_post["Contraseña"];

if($usu){

	session_destroy();
	echo '<script language=javaScript>alter("Su sesion ha terminado")self.location=Ingresar.php</script>';
 
}
else{
	echo '<script language=javaScript>alter("Usuario no autenticado")self.location=Ingresar.php</script>';
}



?>