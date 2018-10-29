<center><?php
	
	if(!empty($_POST)){
		
		$name = $_POST['name'];
		$password = $_POST['password'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6Lcr-l8UAAAAALK4_6xcHT7RdQSIhl0ZaRiORtFW';
		
		if(!$captcha){
 
			echo '<h1>Por Favor Verifica El Captcha</h1>';
			
			} 
			else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<h1>Gracias por Ingresar</h1>';
				} else {
				echo '<h1>Error al comprobar Captcha </h1>';
			}
		}
	}
?>
 
<html>
	<head>
		<title>Yojan Castillo</title>
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body>	
		<link rel="stylesheet" type="text/css" href="fondo.css">
		<form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			Usuario: <input type="text" name="name" placeholder="Ingrese Su Usuario">
			<br><br>
			Password: <input type="password" name="password" placeholder="Ingrese Su Contraseña">
			<br><br>
			<div class="g-recaptcha" data-sitekey="6Lcr-l8UAAAAAOjmZxjKiChkMYC0jMbhHsnD5C84"></div>
			<br>
			<input type="submit" name="login" value="Comenzar">
			<input type="reset"
             value="Limpiar" />
             
			
		</form>
	</body></center>
</html>