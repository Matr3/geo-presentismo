<?php
$mysqli = new mysqli('localhost', 'c2300479_coord', 'Rolling2020', 'c2300479_coord'); 
$present = new mysqli('localhost', 'c2300479_gpsbd', 'Rolling2020', 'c2300479_gpsbd');
$Object = new DateTime();  
$Time = $Object->format("h:i:s a");
$FTime = date("H:i:s a",strtotime("+30 minutes", strtotime($Time)));
$Day = $Object->format("d M Y");

echo "La hora es $Time.";
echo "<br>";

$qpresent = "Select * FROM gpscliente1 INNER JOIN objetivo ON gpscliente1.obj = objetivo.servicio_name";
$sql = mysqli_query($present, $qpresent);
$rows = mysqli_fetch_array($sql);
if ($rows->num_rows > 0) {
        // output data of each row
        while($row = $rows->fetch_array(MYSQLI_BOTH)){
                 $servicio_id =$row["servicio_id"];
                 $obj =$row["servicio_name"];
		 $T1 =$row["T1"];
		 $act =$row["act"];
		 $hora =$row["hora"];
echo "La hora es $Time.";
echo "<br>";

 }}}
?>