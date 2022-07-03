<?php
 require 'conexion.php';
  
 $id = "";
 $fecha1  = $_POST['fecha'];
 $hora1  = $_POST['hora'];
 $coord = $_POST['coord'];
 $obj = $_POST['obj'];
$vig = $_POST['vig'];
$lat = "";
$lng = "";
$direccion = "";
$fecha=date("d M Y", strtotime($fecha1));
$hora=date("H:i:s a", strtotime($hora1));

$insertar = "INSERT INTO gpscliente1 VALUES ('$id', '$direccion', '$lat', '$lng', '$fecha', '$hora', '$coord', '$obj', '$vig') ";

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