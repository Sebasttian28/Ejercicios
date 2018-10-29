<?php
class Con_Seguros{
	private $servidor="localhost";
	private $usuario="root";
	private $pass="0000";
	private $BD="Seguros";

	public function Cone(){
		$conexion=mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->BD);
		return $conexion;
	}

}

?>