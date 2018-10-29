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
    
    if (isset($_POST['a'])){
        if ($_POST){
            $conta = $_POST["conta"] + 1;
            }
            else{
            $conta = 0;
            }
        $ti=$_POST['ti'];
        $ta=$_POST['ta'];
        echo '<BR>';
        echo 'El número de la cita es: '.$conta;
        echo '<BR>';
        echo 'Esta cita es de tipo: '.$ti;
        echo '<BR>';
        echo 'Su tarifa normal es:'.$ta;
        echo '<BR>';
        include 'Clases.php';
        $nuevo =new Cita($ti,$ta);
        echo 'Pero por ser de tipo '.$nuevo->getTipo($ti);
        echo ' queda con un valor final de '.$nuevo->getTarifa($ta, $ti);
    }
    
?>
