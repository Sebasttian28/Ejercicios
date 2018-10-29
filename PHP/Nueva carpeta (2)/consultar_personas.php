<?php 

require_once("conexion.php");

class MetodosPersona{
    public function Mostrar_1_Persona($id){ 

$conec= new conectar();
$conexion=$conec-> conexion();

$sql="select * from persona where Num_Doc_P='$id'|| Tipo_Documento='$id' || Nombre='$id' || Apellidos_P='$id' || Fecha_Nac='$id' || Sexo='$id'
	|| Correo='$id' || Telefono='$id' || Direccion_Res='$id'";

$consulta=$conexion->query($sql);
return $consulta;
}

public function inser_persona($tdp,$ndp,$nop,$app,$fep,$sxp,$cop,$tep,$dip){

    $conec= new conectar();
$conexion=$conec-> conexion();
$sql="insert into persona values(?,?,?,?,?,?,?,?,?)";
$consulta=$conexion->prepare($sql);
$consulta->bind_param('sssiis',$tidp,$nudp,$nomp,$apep,$fecp,$sexp,$corp,$telp,$dirp);

$tidp=$tdp;
$nudp=$ndp;
$momp=$nop;
$apep=$app;
$fecp=$fep;
$sexp=$sxp;
$corp=$cop;
$telp=$tep;
$dirp=$dip;

$consulta->execute();
return "Persona Ingresada";

}

public function consultar_1_persona($ndp){

$conec= new conectar();
$conexion=$conec-> conexion();
$sql="select Nombre where Num_Doc_P='$ndp'";
$consulta=$conexion->query($sql);
return $consulta;

}

public function MostrarPersona(){

$conec=new conectar();
$conexion= $conec->conexion();
$sql="select * from persona";
$consulta=mysqli_query($conexion,$sql);

return $consulta;

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
<th>".$f[6]."</th>
<th>".$f[7]."</th>
<th>".$f[8]."</th>
</tr>";

    }
    echo"</table>";
	}

}

$mostrar=new MetodosPersona();
$mostrar->MostrarPersona();

?>
