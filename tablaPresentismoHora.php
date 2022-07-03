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


$query   = "SELECT * FROM gpscliente1";
$result = $conn->query($query);
if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array(MYSQLI_BOTH)){
            
                                                 $var1 =$row["id"];
                                                 $var2 =$row["coord"];
						 $var3 =$row["obj"];
						 $var4 =$row["lat"];
						 $var5 =$row["lng"];
						 $var6 =$row["fecha"];
						 $var7 =$row["hora"];
						 $var8 =$row["vig"];

    $query   = "UPDATE objetivo SET act='$var7', fecha='$var6' WHERE servicio_name='$var3' ";

    if ($conn->query($query)) {
       
    } else {
        echo "Error al Registrar, vuevla a intentarlo" . mysqli_error($conn);
    }

}
}
?>