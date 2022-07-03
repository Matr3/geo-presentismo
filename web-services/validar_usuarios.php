<?php
include 'conexion.php';
$usu=$_POST['usuario'];
$pass=$_POST['password'];

//$usu_usuario="angeloroncal@developeru.net";
//$usu_password="12345678";

$sentencia=$conexion->prepare("SELECT * FROM login WHERE usu=? AND pass=?");
$sentencia->bind_param('ss',$usu,$pass);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>