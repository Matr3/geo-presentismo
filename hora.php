<?php
header("refresh:1; url=https://geosolc.com.ar/hora.php");
$present = new mysqli('localhost', 'c2300479_gpsbd', 'Rolling2020', 'c2300479_gpsbd');
$Object = new DateTime();  
$Time = $Object->format("h:i:s a");
$FTime = date("H:i:s a", strtotime($Time));
$Day = $Object->format("d M Y");
$DayN = date('N');



$pres = $present->query("SELECT * FROM objetivo");
       while ($col=mysqli_fetch_array($pres)) {
       $L=$col['L'];
       $L1=$col['L1'];
       $L2=$col['L2'];
       $L3=$col['L3'];
       $M=$col['M'];
       $M1=$col['M1'];
       $M2=$col['M2'];
       $M3=$col['M3'];
       $X=$col['X'];
       $X1=$col['X1'];
       $X2=$col['X2'];
       $X3=$col['X3'];
       $J=$col['J'];
       $J1=$col['J1'];
       $J2=$col['J2'];
       $J3=$col['J3'];
       $V=$col['V'];
       $V1=$col['V1'];
       $V2=$col['V2'];
       $V3=$col['V3'];
       $S=$col['S'];
       $S1=$col['S1'];
       $S2=$col['S2'];
       $S3=$col['S3'];
       $D=$col['D'];  
       $D1=$col['D1'];
       $D2=$col['D2'];
       $D3=$col['D3'];     
       $ing=$col['act'];
       $fecha=$col['fecha'];
       $Obj=$col['servicio_name'];

if($DayN == 7){
echo "Log. Domingo";
echo "<br>";
if($D!=null){

if($D1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($D1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($D1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $D1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($D2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($D2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($D2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $D2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($D3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($D3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($D3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $D3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}

///LUNES
if($DayN == 1){
echo "Log. Lunes";
echo "<br>";
if($L!=null){

if($L1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($L1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($L1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $L1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($L2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($L2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($L2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $L2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($L3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($L3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($L3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $L3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}
//////////MARTES
if($DayN == 2){
echo "Log. Martes";
echo "<br>";
if($M!=null){

if($M1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($M1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($M1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $M1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($M2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($M2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($M2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $M2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($M3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($M3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($M3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $M3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}
/////////////////MIERCOLES
if($DayN == 3){
echo "Empieza el $Day";
echo "<br>";
echo "dia: $fecha";
echo "<br>";

echo "Log. Miercoles";
echo "<br>";
if($X!=null){
echo "Log. Turno 1";
echo "<br>";
if($X1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($X1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($X1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));
 $fecha1= date_format($fecha, "d M Y");


echo "tiempo de entrada $X1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";
echo "tiempo limite final $fecha1";
echo "<br>";

if($Day == $fecha1){
if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "presentismo@geosolc.com.ar";
    $to = "presentismo@geosolc.com.ar";
    $subject = "Falta presentismo '.$Obj.'";
    $message = "Falta presentismo '.$Obj.'";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
}
}
}}
///TURNO 2
if($X2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($X2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($X2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $X2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($X3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($X3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($X3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $X3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}

///////////////////////////////JUEVES
if($DayN == 4){
echo "Log. Jueves";
echo "<br>";
if($J!=null){

if($J1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($J1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($J1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $J1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($J2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($J2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($J2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $J2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($J3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($J3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($J3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $J3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}
////////////////////////VIERNES
if($DayN == 5){
echo "Log. Viernes de $Obj";
echo "<br>";
if($V!=null){

if($V1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($V1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($V1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $V1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($V2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($V2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($V2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $V2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($V3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($V3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($V3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $V3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}
////////////////////////SABADO
if($DayN == 6){
echo "Log. Sabados";
echo "<br>";
if($S!=null){

if($S1!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($S1)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($S1)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $S1";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 2
if($S2!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($S2)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($S2)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $S2";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}
///TURNO 3
if($S3!=null) {
 $startTime = date("H:i:s a",strtotime("-30 minutes", strtotime($S3)));
 $endTime = date("H:i:s a",strtotime("+30 minutes", strtotime($S3)));
 $ingreso= date("H:i:s a",strtotime("+12 hours", strtotime($ing)));



echo "tiempo de entrada $S3";
echo "<br>";
echo "tiempo limite comienzo $startTime";
echo "<br>";
echo "tiempo limite final $endTime";
echo "<br>";
echo "Ingreso $ingreso";
echo "<br>";


if($FTime == $endTime) {
//echo "what $Obj";
//echo "<br>";
if($ingreso>$startTime && $ingreso<$endTime){
echo "el presente fue $Obj";
echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Se tomo el presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}else{
//echo "No hay presente en $Obj";
//echo "<br>";
  echo '<script type="text/javascript">';
       echo ' alert("Falta presentismo '.$Obj.'")';  //not showing an alert box.
       echo '</script>';
}
}
}

}

}



}

?>