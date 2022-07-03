<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Find Nearest Location using Latitude and Longitude Example</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Location List</h2>
                    </div>
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

    // Buscaramanga Coordinates
    $lat = -34.6468344;
    $lng = -58.4867486;
        
    // Only show places within 100km
    $distance = 1;

    $lat = mysqli_real_escape_string($conn, $lat);
    $lng = mysqli_real_escape_string($conn, $lng);
    $distance = mysqli_real_escape_string($conn, $distance);

    $query = <<<EOF
    SELECT * FROM (
        SELECT *, 
            (
                (
                    (
                        acos(
                            sin(( $lat * pi() / 180))
                            *
                            sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))
                            *
                            cos(( `lat` * pi() / 180)) * cos((( $lng - `lng`) * pi()/180)))
                    ) * 180/pi()
                ) * 60 * 1.1515 * 1.609344
            )
        as distance FROM `gps`
    ) gps
    WHERE distance <= $distance
    LIMIT 15;
EOF;

    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["id"] . "<be>";
            echo $row["direccion"] . "<br>";
        }
    }
?>
                </div>
            </div>     
        </div>
 
</body>
</html>