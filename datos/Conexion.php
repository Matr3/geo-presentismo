<?php
$hostname='localhost';
$database='c2300479_gpsbd';
$username='c2300479_gpsbd';
$password='R@lling2020';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>