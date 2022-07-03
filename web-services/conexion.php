<?php
$hostname='localhost';
$database='c2300479_gslogin';
$username='c2300479_gslogin';
$password='Rolling2020';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>