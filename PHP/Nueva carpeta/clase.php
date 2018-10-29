<?php

class Automovil
{

var $color;
var $cilindraje;
var $placa;
var $ruedas;
var $modelo;

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
echo "<br><br>el color del Automovil es: ".$this->$color;
}
}

//------------------------------------------------------------------------------------------------------
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