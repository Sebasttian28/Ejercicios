<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>
<div id="Res08">
<?php	  
            
	$Codigo= $_POST['codigo']; 
    $Nombre= $_POST['nombre'];
    $Materia= $_POST['materia'];
    $N1= $_POST['nota1'];
    $N2= $_POST['nota2'];
    $N3= $_POST['nota3'];
    $N4= $_POST['nota4'];    

    $promedio= ($N1+$N2+$N3+$N4)/4;

    if($promedio>=4.0){

        echo "<br><br> Codigo: $Codigo";
        echo "<br><br> Nombre: $Nombre";
        echo "<br><br> Materia: $Materia";
        echo "<br>";
        echo "<br><br><h2> Aprobado</h2>";
    }

    else {

        echo "<br><br> Codigo: $Codigo";
        echo "<br><br> Nombre: $Nombre";
        echo "<br><br> Materia: $Materia";
        echo "<br>";
        echo "<br><br><h2> Reprobado</h2>";
    
    }

    
    

?>  
</div>

</body>