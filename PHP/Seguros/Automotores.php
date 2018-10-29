<?php

require_once ("conexion.php");

class MetodoAutomotores{
	
	public function Automotores(){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from Automotores";
	$consult=mysqli_query($conexion, $sql);
	return $consult;
	}

	public function AutoPlaca(){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select autoplaca from Automotores";
	$consult=mysqli_query($conexion,$sql);
	return $consult;
	}

	public function Mostrar_1_Aut($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();

	$sql="select * from Automotores where autoplaca='$id' || automarca='$id' || autotipo='$id' || automodelo='$id' || autonumpasajeros='$id' || autocilindraje='$id' || autonumchasis='$id'";
	$consulta=mysqli_query($conexion,$sql);
		return $consulta;
	}

	public function Mostrar_Aut($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();

	$sql="select * from Automotores where autoplaca='$id'";
	$consulta=mysqli_query($conexion,$sql);
	
	return $consulta;
	}

	public function Insert_Aut($p,$m,$t,$a,$n,$c,$s){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$result=$this->Mostrar_1_Aut($p);
	if ($result->num_rows>0) {
		$mensa="El Auto ya existe";
	}
	else{
	$sql="insert into Automotores values(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssiiiis',$p_p,$m_p,$t_p,$a_p,$n_p,$c_p,$s_p);
	$p_p=$p;
	$m_p=$m;
	$t_p=$t;
	$a_p=$a;
	$n_p=$n;
	$c_p=$c;
	$s_p=$s;
	$consulta->execute();
	$mensa="Auto Ingresado";
	
	}
	return $mensa;

	}

	public function Modi_Aut($m,$t,$a,$n,$c,$s,$p){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="call Modificar_Automotores(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('siiiiss',$m_p,$t_p,$a_p,$n_p,$c_p,$s_p,$p_p);
	$m_p=$m;
	$t_p=$t;
	$a_p=$a;
	$n_p=$n;
	$c_p=$c;
	$s_p=$s;
	$p_p=$p;
	$consulta->execute();
	$mensa="Auto Modificado";
	
	return $mensa;

	}
}

?>