<!DOCTYPE html> 
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Juego</title>
	<link rel="stylesheet" href="css/jestilos.css">
</head>
<body>
		
		<?php

			if ($_POST){
			$contador = $_POST["contador"] + 1;
			}
			else{
			$contador = 0;
			}			
			?>


	<spection id="contenedor">
		<header>
			<form action="Piedra, papel o tijera.php" method="Post">

			<nav class="menu">

			<h3> USUARIO<h3>
			<div id="piedra">
				<input type="image" name="piedra" src="Img/piedra.png" value="1">
				<input type="hidden" name="contador" value="<?=$contador?>">
				</div>
				<div id="papel">
				<input type="image" name="papel" src="Img/papel.png" value="2">
				<input type="hidden" name="contador" value="<?=$contador?>">
				</div>
				<div id="tijera">
				<input type="image" name="tijera" src="Img/tijera.png" value="3">
				<input type="hidden" name="contador" value="<?=$contador?>">
				</div>
				</nav>
				<input type="submit" name="bo" value="Terminar">
				</div>
				<center><h3> CPU </h3>
						
			</header>
			<article>	
			
			
			<?php

			if ((isset($_POST['piedra']))||(isset($_POST['papel']))||(isset($_POST['tijera']))) {

			if (isset($_POST['piedra'])) {
				$pi=$_POST['piedra'];

				$ran=mt_rand(1,3);

				if ($ran==1){
					echo "<img src='Img/Piedra 2.png' >";
				}
				elseif ($ran==2){
					echo "<img src='Img/Papel 2.png' >";
				}
				elseif ($ran==3){
					echo "<img src='Img/Tijera 2.png' >";
				}

				if ($pi==$ran && $ran==1) {
					echo "<h1>Empate</h1>";
				}
				else if ($pi!==$ran && $ran==2) {
					echo "<h1>Perdio</h1>";
				}					
				else if ($pi!==$ran && $ran==3) {
					echo "<h1>Ganó</h1>";
				}				
			}

			if (isset($_POST['papel'])) {
				$pa=$_POST['papel'];

				$ran=mt_rand(1,3);

				if ($ran==1){
					echo "<img src='Img/Piedra 2.png' >";
				}
				elseif ($ran==2){
					echo "<img src='Img/Papel 2.png' >";
				}
				elseif ($ran==3){
					echo "<img src='Img/Tijera 2.png' >";
				}

				if ($pa==$ran && $ran==2) {
					echo "<h1>Empate</h1>";
				}
				else if ($pa!==$ran && $ran==3) {
					echo "<h1>Perdio</h1>";
				}					
				else if ($pa!==$ran && $ran==1) {
					echo "<h1>Ganó</h1>";

				}

			}

			if (isset($_POST['tijera'])) {
				$ti=$_POST['tijera'];

				$ran=mt_rand(1,3);

				if ($ran==1){
					echo "<img src='Img/Piedra 2.png' >";
				}
				elseif ($ran==2){
					echo "<img src='Img/Papel 2.png' >";
				}
				elseif ($ran==3){
					echo "<img src='Img/Tijera 2.png' >";
				}

				if ($ti==$ran && $ran==3) {
					echo "<h1>Empate</h1>";
				}
				else if ($ti!==$ran && $ran==1) {
					echo "<h1>Perdio</h1>";
				}					
				else if ($ti!==$ran && $ran==2) {
					echo "<h1>Ganó</h1>";

				}
			}
		}

			echo "$contador";

			?>
			
		</article>
	</spection>
</body>
</html>
</body>
</html>