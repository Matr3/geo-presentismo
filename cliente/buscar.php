<?php
require_once("conexion.php");
require_once("geolocalizar.php");

$nombre=$_POST["nombre"];
$direccion=$_POST["direccion"];

$return=Maps::buscaLugar($direccion);
$lat=$return[0];
$lng=$return[1];
$sql="INSERT INTO Cliente (nombreCliente,direccionCliente,latCliente,lngCliente) VALUES ('$nombre','$direccion','$lat','lng');";
$query=mysqli_query($link,$sql);
if($query){
echo "<script>alert(\"Exito al registrar.\"); </script>";
echo "<script>location.href='cliente.php' </script>";
}else{
echo "<script>alert(\"Error al registrar.\"); </script>";
echo "<script>location.href='cliente.php'</script>";
}