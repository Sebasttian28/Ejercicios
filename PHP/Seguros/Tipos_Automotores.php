<?php

require_once ("conexion.php");

class MetodoTipos_Automotores{
	
	public function Tipos_Automotores(){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from tiposAutomotores";
	$consult=mysqli_query($conexion, $sql);
	return $consult;
	}

	public function Mostrar_1_Tpa($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from tiposAutomotores where auttipo='$id' || autnombre='$id'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_Tpa($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from tiposAutomotores where auttipo='$id'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Insert_Tpa($a,$t){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$result=$this->Mostrar_1_Tpa($a);
	$resulta=$this->Mostrar_1_Tpa($t);
	if ($result->num_rows>0 || $resulta->num_rows>0) {
		$mensa="El Usuario ya existe";
	}
	else{
	$sql="insert into tiposAutomotores values(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('is',$a_p,$t_p);
	$a_p=$a;
	$t_p=$t;
	$consulta->execute();
	$mensa="Usuario Ingresado";
	
	}
	return $mensa;

	}
	public function Modi_Tpa($t,$a){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="call Modificar_TiposAutomotores(?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('si',$t_p,$a_p);
	$t_p=$t;
	$a_p=$a;
	$consulta->execute();
	
	$mensa="Usuario Modificado";
	return $mensa;

	}
}
?>