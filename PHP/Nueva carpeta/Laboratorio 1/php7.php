<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>
<div id="Res07">
<?php	  

	$Edad= $_POST['edad']; 
    $Estatura= $_POST['estatura'];
    $Peso= $_POST['peso'];
    

    if($Edad <=18 ){

    if($Estatura >=180 ){

    if($Peso <=80){

    echo "<h2><br><br>Aceptado</h2>";

    }
    else {
    echo "<h2><br><br>Rechazado</h2";
    }

    }
    else {
    echo "<h2><br><br>Rechazado</h2>";
    }
    
    }
    else {
    echo "<h2><br><br>Rechazado</h2>";

}
        
?>  
</div>

</body>