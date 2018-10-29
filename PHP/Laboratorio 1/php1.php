<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/Estilos.css">
</head>

<body>
<div id="Res01">
<?php	          
	$numero = rand(1, 3);
	switch ($numero){
    case "1":
    echo "<br><br><center><h1> uno </h1></center>";
    break;                          
    case "2":
    echo "<br><br><center><h1> dos </h1></center>";
    break;
    case "3":
    echo "<br><br><center><h1> tres </h1><center>";
    break;} 	
?>  
</div>

</body>

</html>   