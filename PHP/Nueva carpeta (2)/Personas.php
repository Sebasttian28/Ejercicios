<?php
require_once("con_usu.php");
require_once("crud_roles.php"); 
require_once("crud_persona.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Personas</title>
</head>
<body>

	<?php
	$mostrar=new MetodosPersona();
	$consulta=$mostrar->MostrarPersona(); 
echo "

<table>
<tr>  

<th> Tipo de documento </th>
<th> Numero de documento </th>
<th> Nombre  </th>
<th> Apellido </th>
<th> Fecha nacimiento </th>
<th> Sexo </th>
<th> Correo </th>
<th> Telefono </th>
<th> Direccion </th>

</tr>";		

while($f=mysqli_fetch_row($consulta)){	 	

echo "
<tr>  
<th>".$f[0]."</th>
<th>".$f[1]."</th>
<th>".$f[2]."</th>
<th>".$f[3]."</th>
<th>".$f[4]."</th>
<th>".$f[5]."</th>
<th>".$f[6]."</th>
<th>".$f[7]."</th>
<th>".$f[8]."</th>
</tr>";
    }
    echo"</table>";

   	
    ?>

   	<br>
    <form action="" method="get">
    <input type="text" name="documento">
    <input type="submit" name="consulta" value="CONSULTAR">	
    </form>

<?php

if (isset($_GET['consulta'])) 
    {
   		$id=$_GET['documento']; 
   		$uno=$mostrar->Mostrar_1_Persona($id);
   		echo "

        <table>
		<tr>  

		<th> Tipo de documento </th>
		<th> Numero de documento </th>
		<th> Nombre  </th>
		<th> Apellido </th>
		<th> Fecha nacimiento </th>
		<th> Sexo </th>
		<th> Correo </th>
		<th> Telefono </th>
		<th> Direccion </th>

		</tr>";	

        while($f=mysqli_fetch_row($uno)){

        echo "
        <tr>  
        <th>".$f[0]."</th>
        <th>".$f[1]."</th>
        <th>".$f[2]."</th>
        <th>".$f[3]."</th>
        <th>".$f[4]."</th>
        <th>".$f[5]."</th>
        <th>".$f[6]."</th>
        <th>".$f[7]."</th>
        <th>".$f[8]."</th>
        </tr>";
            }
            echo"</table>";
    }
    ?>


    <br>
    <br>
    <h3>INSERTAR PERSONA</h3>

    <form action="" method="post">
    Tipo documento <br><input type="text" name="Tipo_doc"><br><br>
    Numero Documento <br><input type="text" name="num_doc"><br><br>
    Nombre <br><input type="text" name="nombre"><br><br>
    Apellido <br><input type="text" name="apellido"><br><br>
    Fecha Nacimiento <br><input type="date" name="fecha"><br><br>
    Sexo <br><input type="text" name="sexo"><br><br>
    Correo <br><input type="text" name="correo"><br><br>
    Telefono <br><input type="text" name="telefono"><br><br>
	Direccion <br><input type="text" name="direccion"><br><br>

	
	<input type="submit" name="INSERTAR" value="INSERTAR">

	</form>

	<?php
    if (isset($_POST['INSERTAR'])) {
        $tdp=$_POST['Tipo_doc'];
        $ndp=$_POST['num_doc'];
        $nop=$_POST['nombre'];
        $app=$_POST['apellido'];
        $fep=$_POST['fecha'];
        $sxp=$_POST['sexo'];
        $cop=$_POST['correo'];
        $tep=$_POST['telefono'];
        $dip=$_POST['direccion'];
        $mensaje=$mostrar->inser_persona($tdp,$ndp,$nop,$app,
        $fep,$sxp,$cop,$tep,$dip);
        echo $mensaje;
    }
    
    ?>
    

</body>
</html>
