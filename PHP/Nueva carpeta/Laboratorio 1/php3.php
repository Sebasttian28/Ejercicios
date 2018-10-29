<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>

<body>
<div id="Res03">
<?php	          
	$mujeres= $_POST['mujeres'];
    $hombres= $_POST['hombres'];
    $totalestudiantes = ($mujeres+$hombres);


    $pmujeres= ($mujeres/$totalestudiantes)*100;
    $phombres= ($hombres/$totalestudiantes)*100;
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Porcentaje de mujeres";
    echo "<br>";
    echo "<br>";
    echo "$pmujeres %";
    echo "<br>";
    echo "<br>";
    echo "Pocentaje de hombres";
    echo "<br>";
    echo "<br>";
    echo "$phombres %";
	 	
        
?>  
</div>

</body>

</html>   