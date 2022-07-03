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

// query the Buildings table to get the building data we need
$sql = "SELECT latCliente, lngCliente FROM Cliente;";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $allBuildings[] = $row;
}

$result -> close();

// count how many buildings there are to save time in the loop
$buildingsNumber = count($allBuildings);

// this is the key query, which runs a SELECT query for every building so that only the markers visible by the buildings are shown
for ($i = 0; $i < $buildingsNumber; $i++) {
    // get the building's lat/lng
    $lat = $allBuildings[$i]["latCliente"];
    $lng = $allBuildings[$i]["lngCliente"];

    // get the building's vision range in metres
    $distance = 0.025;

    // this is the core query. it is a radius search using lat/lngs with the centre being the building's location and the radius being its vision_range
    $sql .= "SELECT gps.lat, gps.lng,
    (6378137 * acos(cos(radians($lat)) * cos(radians(lat)) * cos(radians(lng) - radians($lng)) + sin(radians($lat)) * sin(radians(lat))))
    AS distance FROM gps
    HAVING distance < $distance;";
}

// note two important things: multi query doesn't work without the MYSQLI_USE_RESULT flag, and we don't close a multi query result otherwise we get server errors
$result = mysqli_multi_query($conn, $sql, MYSQLI_USE_RESULT);
while ($row = mysqli_fetch_assoc($result)) {
    $markersArray[] = $row;
}

?>