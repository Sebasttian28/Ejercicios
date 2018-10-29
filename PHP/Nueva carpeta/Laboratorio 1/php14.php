<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>
             
<body>

<div id="Res14"> 

<?php
$r1=$_POST['numero'];
$r2=0;
$r3=0;
$r4=1;

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "La serie es:";
    echo "<br>";
    echo "<br>";
    
    while ($r2<=$r1) {
        $r5=$r3+$r4;
        $r4=$r3;
        $r3=$r5;
        $r2=$r2+1;
    
    echo "$r5";

    if ($r2<=$r1) {
        
        echo ",";
    }
}

?>

</div>

</body>