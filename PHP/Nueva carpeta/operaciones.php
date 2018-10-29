<?php 

function operaciones($n1, $n2, $operacion) {
$resultado = 0;

if($operacion == "Sumar") {

$resultado = $n1 + $n2;
}else if($operacion == "Restar") {

$resultado = $n1 - $n2;
}else if($operacion == "Multiplicar") {

$resultado = $n1 * $n2;
}

return $resultado; 
}


function incrementar(&$var){
    $var++;

}
$numero = $10;
incrementar($numero);
echo $numero


?>
