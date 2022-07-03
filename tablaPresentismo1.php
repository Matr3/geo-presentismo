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


    ////Inicializas las variables
$var1 = [];
$var2 = [];
$var3 = [];
$var4 = [];
$var5 = [];
$var6 = [];
$var7 = [];
$var8 = [];


   
    // Bucaramanga Coordinates
    $latc=-34.6050386;
    $lngc=-58.3801639;


        
    // Only show places within 100km
    $distance = 0.25;

    $latc = mysqli_real_escape_string($conn, $latc);
    $lngc = mysqli_real_escape_string($conn, $lngc);
    $distance = mysqli_real_escape_string($conn, $distance);

    $query = <<<EOF
    SELECT * FROM (
        SELECT *, 
            (
                (
                    (
                        acos(
                            sin(( $latc * pi() / 180))
                            *
                            sin(( `lat` * pi() / 180)) + cos(( $latc * pi() /180 ))
                            *
                            cos(( `lat` * pi() / 180)) * cos((( $lngc - `lng`) * pi()/180)))
                    ) * 180/pi()
                ) * 60 * 1.1515 * 1.609344
            )
        as distance FROM `gpscliente` ORDER BY id DESC
    ) gpscliente
    WHERE distance <= $distance
    LIMIT 15;
EOF;

    $result = $conn->query($query);

///////////////////////////////////////////////////////////////////    

			

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
mysqli_query($conn, "INSERT INTO gpscliente1 (id, coord, obj, lat, lng, fecha, hora, vig) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6', '$var7', '$var8')");


				 
        }
    }


?>