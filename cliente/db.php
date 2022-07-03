<?php
    $host='localhost';
    $username='c2300479_gpsbd';
    $password='Rolling2020';
    $dbname = "c2300479_gpsbd";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>