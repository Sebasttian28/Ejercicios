<?php

class Automovil  
    {
        public $marca;
        public $modelo;
        public $cilindraje;
        public $color;
        public function andar($andar)  
        public function parar($parar)
        public function manejar($manejar)

    } 

	    public function getColor()
	    {
	        return $this->color;
	    }

		$auto = new Coche();
		$auto->color = 'verde';
		$auto->marca = 'audi';

		$auto2 = new Coche();
		$auto2->color = 'azul';
		$auto2->marca = 'bmw';

?>