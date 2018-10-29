<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>

<body>
<div id="Res02">

<?php
    
	$binario= $_POST['binario'];

    $decimal= 0;

    $base= 1;
    
    for($i=strlen($binario)-1;$i>=0;$i--){
    $decimal += $binario[$i]*$base;
    $base *= 2;

}
    

    $deci=$_POST['decimal'];

    $a=array();

    for ($i = 0; $i < 20; $i++){
        
        $b = $deci % 2;

        $a[$i] = $b;

        $deci = intval ($deci / 2);

        if ($deci == 0 ) break;

        echo "<br>";
    }

        echo "Decimal a Binario";
        echo "<br>";
        echo "<br>";

$N =sizeof($a) - 1;
for ($i = $N; $i >= 0; $i--){ 
                              
    echo $a[$i] ;                   

}   

    echo "<br>";
    echo "<br>";
    echo "Binario a Decimal";
    echo "<br><br>$decimal";

?>  
</div>


</body>

</html>   