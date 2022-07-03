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
    $latquery = mysql_query("SELECT latCliente FROM Cliente");
        $lat1 = mysqli_real_escape_string($latquery);
         //$lat1 = mysqli_real_escape_string($conn, $latquery);
    $lngquery = mysql_query("SELECT lngCliente FROM Cliente");
        $lng1 = mysqli_real_escape_string($lngquery);
          //$lng1 = mysqli_real_escape_string($conn, $lngquery);
     //$lat1=-34.6044008;
     //$lng1=-58.382807;

        
    // Only show places within 100km
    $distance = 0.25;

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
                            sin(( $lat1 * pi() / 180))
                            *
                            sin(( `lat` * pi() / 180)) + cos(( $lat1 * pi() /180 ))
                            *
                            cos(( `lat` * pi() / 180)) * cos((( $lng1 - `lng`) * pi()/180)))
                    ) * 180/pi()
                ) * 60 * 1.1515 * 1.609344
            )
        as distance FROM `gps` ORDER BY id DESC
    ) gps
    WHERE distance <= $distance
    LIMIT 15;
EOF;

    $result = $conn->query($query);
    
echo '<table class="table" style="font-size:12px; margin-top:-1%;">

				<tr class="active">
                                        <th>Id</th>
                                        <th>Coordinador</th>
					<th>Objetivo</th>
					<th>Latitud</th>
					<th>Longitud</th>
					<th>Fecha</th>
					<th>Hora</th>
				</tr>';

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array(MYSQLI_BOTH)) {
            echo'<tr>
                                                 <td>'.$row['id'].'</td>
                                                 <td>'.$row['coord'].'</td>
						 <td>'.$row['obj'].'</td>
						 <td>'.$row['lat'].'</td>
						 <td>'.$row['lng'].'</td>
						 <td>'.$row['fecha'].'</td>
						 <td>'.$row['hora'].'</td>
						 </tr>';
        }echo '</table>';
    }
?>