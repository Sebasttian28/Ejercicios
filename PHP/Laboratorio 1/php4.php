<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>

<body>
<div id="Res04">
<?php	          
	$dias= $_POST['dias'];
    $hextras= $_POST['horasextra'];
    $salariobase= 781242;
    $valordia= 32551.75;
    $valorhora= 3616.86;
    $valorhoraextra= 4394.49;
    $pension= 10;
    $salud= 15;

    $sueldo= $dias*$valordia;
    $extra= ($hextras*$valorhoraextra);
    $sueldotot= $sueldo+$extra;

    $sueldototal= $sueldotot-(78124.2+117186.3);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Salario: $ $sueldotot";
    echo "<br>";
    echo "<br>";
    echo "Dinero horas extra es de $ $extra";
    echo "<br>";
    echo "<br>";
    echo "Salario final con los descuentos de 10% por pension y 15% por salud es de 
    $ $sueldototal";

	 	
        
?>  
</div>

</body>

