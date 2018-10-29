<?php

require_once ("conexion.php");

class MetodoCompania{
	
	public function Compania(){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from compania";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_1_Com($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from compania where comnit='$id' || comnombre='$id' || comanofun='$id' || comreplegal='$id'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Mostrar_Com($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	
	$sql="select * from compania where comnit='$id'";
	$consulta=mysqli_query($conexion,$sql);
	return $consulta;
	}

	public function Insert_Com($c,$n,$a,$r){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$result=$this->Mostrar_1_Com($c);
	$resulta=$this->Mostrar_1_Com($n);
	if ($result->num_rows>0 || $resulta->num_rows>0) {
		$mensa="El Usuario ya existe";
	}
	else{
	$sql="insert into compania values(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssis',$c_p,$n_p,$a_p,$r_p);
	$c_p=$c;
	$n_p=$n;
	$a_p=$a;
	$r_p=$r;
	$consulta->execute();
	$mensa="Usuario Ingresado";
	
	}
	return $mensa;

	}

	public function Modi_Com($n,$a,$r,$c){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="call Modificar_Compania(?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('siss',$n_p,$a_p,$r_p,$c_p);
	$n_p=$n;
	$a_p=$a;
	$r_p=$r;
	$c_p=$c;
	$consulta->execute();
	$mensa="Usuario Modificado";
	return $mensa;
	}
	

	
}
?>