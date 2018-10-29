<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>

<div id="Res12"> 

<?php

    $r1=$_POST['num'];

    $r2=1;
    
    $r3=0;


    while ($r2<=$r1) { 
    
    $r3=$r3+$r2;
    
    $r2=$r2+1;
}

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h2>Total $r3</h2>";
?>

</div>

</body>
