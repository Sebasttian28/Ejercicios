<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>
<div id="Res09">
<?php	  
            
	$Nllantas= $_POST['llantas']; 
    
    if($Nllantas <5) {

        $precio= (300000*$Nllantas);
    }
    
    elseif($Nllantas <10) {

        $precio= (25000*$Nllantas);
    }

    elseif($Nllantas >10) {

        $precio= (200000*$Nllantas);
    }
    
        echo "<br><br><br><h2> Valor de las llantas: $ $precio</h2>";
    
?>  
</div>

</body>