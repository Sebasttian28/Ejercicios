<?php

require_once("conexion.php");

class MetodosUsuario{
    public function Mostrar_1_usu($id){


$conec= new conectar();
$conexion=$conec-> conexion();
$sql="select * from usuario where Doc_usu='$id'|| Nom_usuario='$id' || contrasena='$id' || Rol=$id || Estado='$id'";
$consulta=$conexion->query($sql);
return $consulta;

    }
public function inser_usuario($doc,$nom,$pass,$rol,$estado,$foto){
    $conec= new conectar();
$conexion=$conec-> conexion();
$sql="insert into usuario values(?,?,?,?,?,?)";
$consulta=$conexion->prepare($sql);
$consulta->bind_param('sssiis',$doc_p,$nom_p,$pass_p,$rol_p,$estado_p,$foto_p);
$doc_p=$doc;
$nom_p=$nom;
$pass_p=$pass;
$rol_p=$rol;
$estado_p=$estado;
$foto_p=$foto;
$consulta->execute();
return "usuario Ingresado";
}

public function modi_usuario($nom,$pass,$rol,$estado,$foto,$doc){

$conec= new conectar();
$conexion=$conec-> conexion();
$sql="update usuario set Nom_usuario=?, contrasena=?, Rol=?, Estado=?, Foto=? where Doc_usu=?";
$consulta=$conexion->query($sql);
$consulta->bind_param('ssiiss',$nom_p,$pass_p,$rol_p,$estado_p,$foto_p,$doc_p);
$doc_p=$doc;
$nom_p=$nom;
$pass_p=$pass;
$rol_p=$rol;
$estado_p=$estado;
$foto_p=$foto;
$consulta->execute();
return "usuario modificado";

}
 public function consultar_1_usu($doc){

$conec= new conectar();
$conexion=$conec-> conexion();
$sql="select Nom_usuario where Doc_usu='$doc'";
$consulta=$conexion->query($sql);
return $consulta;

    }
	

	public function MostrarUsu(){

//$conec=new conectar();
//$conexion=$concec->conexion();
//$sql="call MostrarUsuarios();";
//$consulta=$conexino->query($sql);
//return $consulta;	
	$conec=new conectar();
	$conexion= $conec->conexion();
    $sql="select * from usuario";
    $consulta=mysqli_query($conexion,$sql);

return $consulta;
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
  //mysqli_fetch_row($consulta)
//while($f=$consulta->fetch_row())
    while($f=mysqli_fetch_row($consulta)){

echo "
<tr>  
<th>".$f[0]."</th>
<th>".$f[1]."</th>
<th>".$f[2]."</th>
<th>".$f[3]."</th>
<th>".$f[4]."</th>
<th>".$f[5]."</th>
</tr>";
    }
    echo"</table>";
	}


 

    public function login($nom,$pass){
        $conec= new conectar();
        $conexion=$conec->conexion();

        $sql="call Datos($nom, $pass)";

        $consulta=$conexion->query($sql);  
        return $consulta;

    }

}
?>