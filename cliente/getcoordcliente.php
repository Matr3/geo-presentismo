<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "c2300479_gpsbd";
$password = "Rolling2020";
$dbname = "c2300479_gpsbd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, lat, lng, ( 3959 * acos( cos( radians(-34.6044008) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(-58.382807) ) + sin( radians(-34.6044008) ) * sin( radians( lat ) ) ) ) AS fecha FROM markers HAVING fecha < 25 ORDER BY fecha LIMIT 0 , 20;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - direccion: ". $row["direccion"]. " - Latitdue" . $row["lat"] . " - Longitude ".$row['lng']." - Distance ".$row['fecha']."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>