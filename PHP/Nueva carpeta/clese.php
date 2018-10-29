<?php

class Automovil  
    {
        var $marca;
        var $modelo;
        var $cilindraje;
        var $color;
        var $ruedas;
        public function andar($andar)  
        public function parar($parar)
        public function manejar($manejar)

    	function Automovil() // constructor
		{
		$this->cilindraje=1600;
		$this->ruedas=4;
		$this->color="Gris";	
		}

		function andar()
		{
		echo "Automovil Andando";
		}
		function frenar()
		{
		echo "Detener Automovil"; 	
		}
		function girar()
		{
		echo "Automovil Girando";
		}
		function establece_color($color)
		{
		$this->$color=$color;
		echo "el color del Automovil es: ".$this->$color;
		}
	}

	//------------------------------
		
		class Camion extends Automovil
		{
		var $transmision;

		function Camion()
		{
		$this->ruedas=8;
		$this->color="Negro";
		$this->transmision=12;

}

}

?>