<?php
require 'conexion.php';

$id = $_POST['id'];
$salida = $_POST['salida'];

		
$insertar = "UPDATE clientes SET salida = '$salida' WHERE id = '$id'";
		
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