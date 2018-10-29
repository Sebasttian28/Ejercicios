<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post">
            <p>Digite el tipo de la cita<input type="number" min="1" max="5" name="ti" required=""></p>
            <p>Digite la tarifa de la cita<input type="number" name="ta" required=""></p>
            <input type="submit" value="Enviar" name="a">
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
