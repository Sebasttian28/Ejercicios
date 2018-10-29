<?php
require_once("conexion.php");

class MetodosRoles{
	public function MostrarRol(){
		$conec=new conectar();
		$conexion=$conec->conexion();
		$sql="select id_rol, nombre from Roles";
    	$consulta=mysqli_query($conexion,$sql);
    	return $consulta;
	}
	
}
?>