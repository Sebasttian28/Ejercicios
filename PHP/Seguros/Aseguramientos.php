<?php

require_once ("conexion.php");

class MetodoAseguramientos{
	
	public function Aseguramientos(){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="select * from Aseguramientos";
	$consult=mysqli_query($conexion, $sql);
	return $consult;
	}

	public function Mostrar_1_Ase($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	
	$sql="select * from Aseguramientos where asecodigo='$id' || asefechainicio='$id' || asefechaexpiracion='$id' || asevalorasegurado='$id' || assestado='$id' || asecosto='$id' || aseplaca='$id'";
	$consult=mysqli_query($conexion, $sql);
	
	return $consult;
	}

	public function Mostrar_Ase($id){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	
	$sql="select * from Aseguramientos where asecodigo='$id'";
	$consult=mysqli_query($conexion, $sql);
	return $consult;
	
	}

	public function Insert_Ase($c,$i,$f,$v,$e,$t,$p){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$result=$this->Mostrar_1_Ase($c);
	$resulta=$this->Mostrar_1_Ase($p);
	if ($result->num_rows>0 || $resulta->num_rows>0) {
		$mensa="El Aseguramiento ya existe";
	}

	else{
	$sql="insert into Aseguramientos values(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('issisis',$c_p,$i_p,$f_p,$v_p,$e_p,$t_p,$p_p);
	$c_p=$c;
	$i_p=$i;
	$f_p=$f;
	$v_p=$v;
	$e_p=$e;
	$t_p=$t;
	$p_p=$p;
	$consulta->execute();
	$mensa="Aseguramiento Ingresado";
	
	}
	return $mensa;

	}

	public function Modi_Ase($i,$f,$v,$e,$t,$p,$c){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();                                    
	$sql="call Modificar_Aseguramientos(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssisisi',$i_p,$f_p,$v_p,$e_p,$t_p,$p_p,$c_p);
	$i_p=$i;
	$f_p=$f;
	$v_p=$v;
	$e_p=$e;
	$t_p=$t;
	$p_p=$p;
	$c_p=$c;
	$consulta->execute();
	$mensa="Aseguramiento Modificado";
	
	return $mensa;

}


	public function Eli_Ase($i){
	$conect= new Con_Seguros();
	$conexion= $conect->Cone();
	$sql="call Eliminar_Aseguramientos(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('ssisisi',$i_p);
	$i_p=$i;
	
	$consulta->execute();
	$mensa="Aseguramiento Eliminado";

	return $mensa;

	}

	}



?>