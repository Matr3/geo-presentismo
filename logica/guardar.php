<?php
 date_default_timezone_set('UTC');
 require 'conexion.php';
  
 $id = "";
 $nov  = $_POST['nov'];
 $fecha1  = $_POST['fecha'];
 $hora1  = $_POST['hora'];
 $coord = $_POST['coord'];
 $obj = $_POST['obj'];
$fecha=date("d M Y", strtotime($fecha1));
$hora=date("H:i:s a", strtotime($hora1));

$insertar = "INSERT INTO nov VALUES ('$id','$nov','$fecha','$hora','$coord','$obj') ";

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