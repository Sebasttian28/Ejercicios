<?php

class Cuenta{
    var $numero;
    var $tipo;
    var $valorInicial;
    var $saldoActual;
    var $saldoMinimo;
    
    function Cuenta($tipo, $valorInicial) {
        $this->numero = 0;
        $this->tipo = $tipo;
        $this->valorInicial= $valorInicial;
        $this->saldoActual = 0;
        $this->saldoMinimo = 0;
    }
            
    function getsaldo($saldoMinimo, $saldoActual) {
        
        return $tipo;
    }

    
    }

}


?>
