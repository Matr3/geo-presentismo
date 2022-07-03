<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
	$host = 'localhost';
	$usuario = 'c2300479_coord';
	$contraseña = 'Rolling2020';
	$base = 'c2300479_coord';

$conectar= new mysqli($host, $usuario, $contraseña, $base);
if ($conectar -> connect_errno)
{
	die("Fallo la conexion:(".$conectar -> mysqli_connect_errno().")".$conectar-> 
		mysqli_connect_error());
}
  
 $servicio_id = "";
 $servicio_name = $_POST['obj'];
 $coordinador_name = $_POST['coord'];
 $var1 = [];
 $var2 = [];

$sql = "SELECT * FROM coordinadores WHERE coordinador_name = '$coordinador_name'";
$result = $conectar->query($sql);
while ($filaObj = $result->fetch_array(MYSQLI_BOTH) ){

                                $var1 =$filaObj["coordinador_id"];
				$var2 =$filaObj["coordinador_name"];
}

$insertar = "INSERT INTO objetivo (servicio_id, servicio_name, coordinador_id) VALUES ('$servicio_id', '$servicio_name', '$var1')";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../principal.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../principal.php';
    </script>";
}

?>