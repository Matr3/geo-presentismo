<?php
////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
	$host = 'localhost';
	$usuario = 'c2300479_gpsbd';
	$contraseña = 'Rolling2020';
	$base = 'c2300479_gpsbd';

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> 
		mysqli_connect_error());
}

////Inicializas las variables
$var1 = [];
$var2 = [];
$var3 = [];
$var4 = [];
$var5 = [];
$var6 = [];



/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
//$resObj=$conexion->query("SELECT present_obj FROM present");
$qpresent = "SELECT * FROM gpscliente1";
$present = mysqli_query($conexion, $qpresent);
while($row = $present->fetch_array(MYSQLI_BOTH)){
    $obj=$row["obj"];


$qpresentadd = "SELECT * FROM present";
$presentadd = mysqli_query($conexion, $qpresentadd);
while($row = $presentadd->fetch_array(MYSQLI_BOTH)){
    $present_pres=$row["present_pres"];
    $present_obj=$row["present_obj"];
    $present_full=$row["present_full"];
}

$sqlObj = "SELECT present_obj FROM present WHERE present_obj = '$obj'";
$result = $conexion->query($sqlObj);
if ($result->num_rows >= 1) {
    
    echo "El Presente del Vig. existe en ";
    echo "<br>";
    //mysqli_query($conexion, "SELECT CONCAT(present_pres, present_full) as present_full FROM present");

} else {
$sql = "SELECT * FROM objetivo INNER JOIN coordinadores ON objetivo.coordinador_id = coordinadores.coordinador_id INNER JOIN gpscliente1 ON objetivo.servicio_name = gpscliente1.obj;";
$resObj=$conexion->query($sql);
while ($filaObj = $resObj->fetch_array(MYSQLI_BOTH) )
				{

                                $var1 =$filaObj["servicio_id"];
				$var2 =$filaObj["servicio_name"];
				$var3 =$filaObj["coordinador_name"];
                                $var4 =$filaObj["vig"];
				$var5 =$filaObj["fecha"];
				$var6 =$filaObj["hora"];
mysqli_query($conexion, "INSERT INTO present (present_id, present_obj, present_coord, present_pres, present_fecha, present_hora) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6')");
}


    
}
}




///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////


				
//mysqli_query($conexion, "INSERT INTO present (present_id, present_obj, present_coord, present_pres, present_fecha, present_hora) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6')");
//mysqli_query($conexion, "UPDATE present SET present_id='$var1', present_coord='$var3', present_pres='$var4', present_fecha='$var5', present_hora='$var6' WHERE present_obj='$var2'");                                						 
//mysqli_query($conexion, "INSERT INTO present (present_id, present_obj, present_coord, present_pres, present_fecha, present_hora) VALUES ('$var1', '$var2', '$var3', '$var4' '$present_pres', '$var5', '$var6') WHERE present_obj='$var2'");

/////////////////////// VERIFICACION DE PRESENTE DE OBJ ////////////////////////



?>