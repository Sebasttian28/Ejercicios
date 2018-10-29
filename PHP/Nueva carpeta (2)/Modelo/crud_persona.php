<?php
require_once("conexion.php");

class MetodosPersona{
	public function MostrarPersona(){
		$conec=new conectar();
		$conexion=$conec->conexion();
		$sql="select * from persona";
    	$consulta=mysqli_query($conexion,$sql);
    	return $consulta;
	}

}
?>