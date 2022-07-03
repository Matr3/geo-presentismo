<?php
 require 'conexion.php';
  
 $id = "";
 $nombre  = $_POST['nombre'];
 $dni  = $_POST['dni'];
 $fecha  = $_POST['fecha'];
 $hora = $_POST['hora'];
 $salida = "";
 $camara = "";

$insertar = "INSERT INTO clientes VALUES ('$id','$nombre','$dni','$fecha','$hora','$salida','$camara') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}





?>