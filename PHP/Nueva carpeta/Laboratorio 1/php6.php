<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>
<div id="Res06">
<?php	  

	$Lunes= $_POST['Lunes'];
    $Martes= $_POST['Martes'];
    $Miercoles= $_POST['Miercoles'];
    $Jueves= $_POST['Jueves'];
    $Viernes= $_POST['Viernes'];
    $Sabado= $_POST['Sabado'];
    $Domingo= $_POST['Domingo']; 
    
    $promedio= ($Lunes+$Martes+$Miercoles+$Jueves+$Viernes+$Sabado+$Domingo)/7;

    if($promedio>35){

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h2> Que semana tan calurosa </h2>";
    }

    elseif($promedio>=15){

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h2> Que Clima tan delicioso </h2>";
    }

    elseif($promedio<15){

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h2> Que semana tan fria </h2>";
    }

        
?>  
</div>

</body>