<?php
$hostname="localhost";
$database="c2300479_coord";
$username="c2300479_coord";
$password="Rolling2020";
$conn= mysqli_connect($hostname,$username,$password,$database);
if(!$conn)
     die("Connection failed: ".mysqli_connect_errno);
?>