<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style type="text/css" media="screen"> 

	input:hover{background:white ;
		border: solid 2px white;
	}
	form{float;
		background: blue;
		border: solid 3px black;
		height: 340px;
		margin: 0px 500px;
		position: absolute;
		padding: 10px;
		top: 50px;
		width: 300px;
		
	}
    
    </style>


    <body>

	<form action="CuentaB.php" method="POST">

		<center><h1>Gestionar cuenta<h1></center>
		<center>Tipo de cuenta:<br><br></center>
		<center><input type="radio" name="tipocuenta" value="Ahorros">Ahorros<br>
		<input type="radio" name="tipocuenta" value="Credito">Credito<br><br>
		Digite valor inicial<br><br>
		<input type="number" name="valorInicial" value="valorInicial"><br><br>
		<input type="submit" name="btn" value="Consultar"></center>

	</form>
</body>
</html>