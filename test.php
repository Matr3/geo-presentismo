<?php
    $servername = "localhost";
    $username = "c2300479_gpsbd";
    $password = "Rolling2020";
    $dbname = "c2300479_gpsbd";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    // Bucaramanga Coordinates
  SELECT * FROM Cliente;

//$sql="SELECT * FROM Cliente WHERE cod_cliente = {$_SESSION['latCliente']}";

   //lat='latCliente';

   //$lng='lngCliente';
?>