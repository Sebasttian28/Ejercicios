<?php
class conectar{

private $servidor="localhost";
private $usuario="root";
private $pass="0000";
private $bd="Bd_120";


public function conexion(){


$conexion= new mysqli($this->servidor,$this->usuario,$this->pass,$this->bd);


return $conexion;

}

}

$obj= new conectar();
if($obj->conexion()){
echo "Conexion Exitosa";
}




?>