<?php
require_once("con_usu.php");
require_once("crud_roles.php");
require_once("crud_persona.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
</head>
<body>

	<?php
	$mostrar=new MetodosUsuario();
	$consulta=$mostrar->MostrarUsu(); 
echo "

<table>
<tr>  

<th>Documento </th>
<th>Nombre de Usuario </th>
<th>Contraseña </th>
<th>Rol</th>
<th>Estado</th>
<th>Foto</th>
</tr>";

    while($f=mysqli_fetch_row($consulta)){

echo "
<tr>  
<th>".$f[0]." </th>
<th>".$f[1]." </th>
<th>".$f[2]." </th>
<th>".$f[3]."</th>
<th>".$f[4]."</th>
<th>".$f[5]."</th>
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
   		$uno=$mostrar->Mostrar_1_Usu($id);
   		echo "

        <table>
        <tr>  

        <th>Documento </th>
        <th>Nombre de Usuario </th>
        <th>Contraseña </th>
        <th>Rol</th>
        <th>Estado</th>
        <th>Foto</th>
        </tr>";

        while($f=mysqli_fetch_row($uno)){

        echo "
        <tr>  
        <th>".$f[0]." </th>
        <th>".$f[1]." </th>
        <th>".$f[2]." </th>
        <th>".$f[3]."</th>
        <th>".$f[4]."</th>
        <th>".$f[5]."</th>
        </tr>";
            }
            echo"</table>";

    }
    ?>


    <br>
    <br>
    <h3>INSERTAR USUARIO</h3>
    <form action="" method="post">
    <p><label>Documento</label><br><select name="Documento">
        <?php
        $rol=new MetodosPersona();
        $res=$rol-> MostrarPersona();
        while ($f=$res->fetch_row()) {
            echo "<option value='".$f[0]."'>".$f[0]."</option>";
        }
        ?>
    </select></p>
    <p><label>Nombre</label><br><input type="text" name="Nombre"></p>
    <p><label>Contraseña</label><br><input type="text" name="pass"></p>
    <p><label>Rol</label><br><select name="rol">
        <?php
        $rol=new MetodosRoles();
        $res=$rol-> MostrarRol();
        while ($f=$res->fetch_row()) {
            echo "<option value='".$f[0]."'>".$f[1]."</option>";
        }
        ?>
    </select></p>
    <p><label>Estado</label><br><select name="estado">
    	<option value="1">activo</option>
    	<option value="0">inactivo</option>	
    </select></p>
    <p><label>Foto</label><br><input type="file" name="foto"></p>
    <input type="submit" name="INSERTAR" value="INSERTAR">
    <input type="submit" name="MODIFICAR" value="MODIFICAR">
    <input type="submit" name="CONSULTAR" value="CONSULTAR">	
    </form>
    <?php
    if (isset($_POST['INSERTAR'])) {
        $doc=$_POST['Documento'];
        $nom=$_POST['Nombre'];
        $pass=$_POST['pass'];
        $rol=$_POST['rol'];
        $estado=$_POST['estado'];
        $foto=$_POST['foto'];
        $mensaje=$mostrar->inser_usuario($doc,$nom,$pass,$rol,$estado,$foto);
        echo $mensaje;
    }
    if (isset($_POST['MODIFICAR'])) {
        $doc=$_POST['Documento'];
        $nom=$_POST['Nombre'];
        $pass=$_POST['pass'];
        $rol=$_POST['rol'];
        $estado=$_POST['estado'];
        $foto=$_POST['foto'];
        $mensaje=$mostrar->modi_usuario($nom,$pass,$rol,$estado,$foto,$doc);
        echo $mensaje;
    }
    ?>
</body>
</html>