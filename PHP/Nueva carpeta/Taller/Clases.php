<?php

class Cita{
    var $numero;
    var $tipo;
    var $tarifa;
    var $valorFinal;
    
    function Cita($tipo, $tarifa) {
        $this->numero = 0;
        $this->tipo = $tipo;
        $this->tarifa = $tarifa;
        $this->valorFinal = 0;
    }

    function getTipo($tipo) {
        if (($tipo==1)||($tipo==2)||($tipo==3)){
            $tipo="General";
        }
        elseif (($tipo==4)||($tipo==5)) {
        $tipo="Especialista";
        }
        return $tipo;
    }

    function getTarifa($tarifa,$tipo) {
        if (($tipo==1)||($tipo==2)||($tipo==3)){
        $newtarifa=$tarifa-($tarifa*50/100);    
        }
        elseif (($tipo==4)||($tipo==5)) {
        $newtarifa=$tarifa+($tarifa*50/100);
        }
        return $newtarifa;
    }

}


?>
