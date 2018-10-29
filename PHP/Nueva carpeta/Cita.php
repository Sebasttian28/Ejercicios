<!DOCTYPE html>
<html>
<head>
	<title>Solicitar una cita</title>
</head>

<style type="text/css" media="screen"> 

input:hover{background:white ;
	border: solid 2px white;

}
form{float;
	position: absolute;
	margin: 0px 500px;
	top: 80px;
	padding: 10px;
	height: 370px;
	width: 200px;
	background: skyblue;
	border: solid 3px black;
	width:280px;
	text-align: center;

}

</style> 

<body>

<form action = "Cita2.php" method="get" >

	<p>Digite el tipo de la cita<input type="number" min="1" max="5" name="ti" required=""></p>
    <p>Digite la tarifa de la cita<input type="number" name="ta" required=""></p>
	<center><input type="submit" value="Solicitar">


 <?php
        
        if (isset($_POST['a'])){
        if ($_POST){
            $conta = $_POST["conta"] + 1;
            }
            else{
            $conta = 0;
            }
        $ti=$_POST['ti'];
        $ta=$_POST['ta'];
        echo '<BR>';
        echo 'El número de la cita es: '.$conta;
        echo '<BR>';
        echo 'Esta cita es de tipo: '.$ti;
        echo '<BR>';
        echo 'Su tarifa normal es:'.$ta;
        echo '<BR>';
        include 'Clases.php';
        $nuevo =new Cita($ti,$ta);
        echo 'Pero por ser de tipo '.$nuevo->getTipo($ti);
        echo ' queda con un valor final de '.$nuevo->getTarifa($ta, $ti);
        
        
        }
        ?>
	<input type="hidden" name="conta" value="<?=$conta?>">
    </form>
</body>
</html>