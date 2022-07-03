<?php
 require 'conexion.php';
  
 $cod_cliente = "";
 $nombreCliente = $_POST['nombreCliente'];
 $direccionCliente  = $_POST['direccionCliente'];
 $latCliente = $_POST['latCliente'];
 $lngCliente = $_POST['lngCliente'];
$dist = $_POST['dist'];


$insertar = "INSERT INTO Cliente VALUES ('$cod_cliente', '$nombreCliente', '$direccionCliente', '$latCliente', '$lngCliente', '$dist') ";

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