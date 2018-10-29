<?php

require_once ("conexion.php");

class MetodoIncidentes{
	
	public function Incidentes(){
	$conect= new Segu_Conex();
	$conexion= $conect->Conex();
	$sql="select * from Incidentes";
	$consult=mysqli_query($conexion, $sql);
	return $consult;
	}

	public function Mostrar_1_Inc($id){
	$conect= new Segu_Conex();
	$conexion= $conect->Conex();
	//$sql="call Mostrarusuarios();";
	$sql="select * from Incidentes where incicodigo='$id' || incifecha='$id' || inciplaca='$id' || incilugar='$id' || incicantheridos='$id' || incicanfantalidades='$id' || incicanautosinvolucrados='$id'";
	$consulta=mysqli_query($conexion,$sql);
	//$consulta=mysqli_query($conexion,$sql)
	return $consulta;
	}

	public function Mostrar_Inc($id){
	$conect= new Segu_Conex();
	$conexion= $conect->Conex();
	//$sql="call Mostrarusuarios();";
	$sql="select * from Incidentes where incicodigo='$id'";
	$consulta=mysqli_query($conexion,$sql);
	//$consulta=mysqli_query($conexion,$sql)
	return $consulta;
	}

	public function Insert_Inc($c,$f,$p,$l,$h,$n,$i){
	$conect= new Segu_Conex();
	$conexion= $conect->Conex();
	$result=$this->Mostrar_1_Inc
	($c);
	if ($result->num_rows>0) {
		$mensa="El Usuario ya existe";
	}
	else{
	$sql="insert into Incidentes values(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('isssiii',$c_p,$f_p,$p_p,$l_p,$h_p,$n_p,$i_p);
	$c_p=$c;
	$f_p=$f;
	$p_p=$p;
	$l_p=$l;
	$h_p=$h;
	$n_p=$n;
	$i_p=$i;
	$consulta->execute();
	$mensa="Usuario Ingresado";
	
	}
	return $mensa;

	}
	public function Modi_Inc($f,$p,$l,$h,$n,$i,$c){
	$conect= new Segu_Conex();
	$conexion= $conect->Conex();
	$sql="call Modificar_Incidentes(?,?,?,?,?,?,?)";
	$consulta=$conexion->prepare($sql);
	$consulta->bind_param('sssiiii',$f_p,$p_p,$l_p,$h_p,$n_p,$i_p,$c_p);
	$f_p=$f;
	$p_p=$p;
	$l_p=$l;
	$h_p=$h;
	$n_p=$n;
	$i_p=$i;
	$c_p=$c;
	$consulta->execute();
	$mensa="Usuario Modificado";
	
	
	return $mensa;

	}
}
?>