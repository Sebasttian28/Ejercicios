<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>
<div id="Res10">
<?php	  
            
	$Numero= $_POST['numero'];
    $i;

    for ($i=0;$i<11; $i++):
        $res=$Numero*$i;

        echo"<br>" ;
        echo"<br>";
        echo $Numero."*".$i."=".$res;
        echo "<br>";
    endfor;    
?>  
</div>

</body>
