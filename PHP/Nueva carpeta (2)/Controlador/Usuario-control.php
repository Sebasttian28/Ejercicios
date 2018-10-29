<?php
require_once("../Modelo/con_usu.php");

if (isset($_POST['todos'])){
	$usu=new MetodosUsuario();
	$result=$usu->Mostrarusu();

	require_once("../Vista/Usuario-vista.php");

}

	


?>