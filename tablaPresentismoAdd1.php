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

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
$qpresent = "SELECT vig, obj FROM gpscliente1";
$present = mysqli_query($conexion, $qpresent);
while($row = $present->fetch_array(MYSQLI_BOTH)){
    $vig=$row["vig"];
    $obj=$row["obj"];

$qpresentadd = "SELECT present_pres FROM present";
$presentadd = mysqli_query($conexion, $qpresentadd);
while($row = $presentadd->fetch_array(MYSQLI_BOTH)){
    $present_pres=$row["present_pres"];
    $present_obj=$row["present_obj"];
}
/////////////////////// VERIFICACION DE PRESENTE DE OBJ ////////////////////////
$sqlObj = "SELECT * FROM present WHERE present_obj = '$obj'";
$result = $conexion->query($sqlObj);

if ($result->num_rows >= 1) {
    echo "El Presente del Vig. existe en ";
    echo $present_obj;
    echo " ";
    $texto_completo = $present_pres . " " . $vig;
    echo $texto_completo;
    echo "<br>";
} else {
    echo "Disponible.";




}}



?>