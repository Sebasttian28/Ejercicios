<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>

<div id="Res13"> 

<?php
    
    $numero= $_POST['numero'];

    function factorial ($numero){

    $factorial=1;
    $contador=1;

    while($contador <= $numero) {   

        $factorial*=$contador;
        $contador++;

    }    

    return $factorial;

}

  

        echo "<br>";
        echo "<br>";
        echo "Factorial de" . $indice . "es:" . factorial($indice) . "<br/>";
      
    

?>

</div>

</body>
