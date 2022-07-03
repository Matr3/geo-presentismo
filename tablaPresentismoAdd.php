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

}




/////////////////////// VERIFICACION DE PRESENTE DE OBJ ////////////////////////
$sqlObj = "SELECT * FROM present WHERE present_obj = '$obj'";
$result = $conexion->query($sqlObj);

if ($result->num_rows >= 1) {
    $present_pres=$row["present_pres"];
    
    
    $qpresentT = "SELECT vig, obj FROM gpscliente1";
    $presentT = mysqli_query($conexion, $qpresentT);
   
   
    
         
        while($row = $presentT->fetch_array(MYSQLI_BOTH)){
                      $vigT=$row["vig"];
                      $objT=$row["obj"];

    echo "El Presente del Vig. existe en ";
    echo $vigT; echo " "; echo " "; echo $objT; 
    echo "<br>";

}} else {
    echo "Disponible.";




}




?>