<?php
 require 'conexion.php';

 $id = "";
 $servicio_name=$_POST['servicio_name'];
 $L = $_POST['L'];
 $L1=$_POST['L1'];
 $L2=$_POST['L2'];
 $L3=$_POST['L3'];
 $M = $_POST['M'];
 $M1=$_POST['M1'];
 $M2=$_POST['M2'];
 $M3=$_POST['M3'];
 $X = $_POST['X'];
 $X1=$_POST['X1'];
 $X2=$_POST['X2'];
 $X3=$_POST['X3'];
 $J = $_POST['J'];
 $J1=$_POST['J1'];
 $J2=$_POST['J2'];
 $J3=$_POST['J3'];
 $V = $_POST['V'];
 $V1=$_POST['V1'];
 $V2=$_POST['V2'];
 $V3=$_POST['V3'];
 $S = $_POST['S'];
 $S1=$_POST['S1'];
 $S2=$_POST['S2'];
 $S3=$_POST['S3'];
 $D = $_POST['D'];
 $D1=$_POST['D1'];
 $D2=$_POST['D2'];
 $D3=$_POST['D3'];

//$insertar = "UPDATE objetivo SET coordinador_id='$var1' WHERE servicio_name='$servicio_name'";


$query = mysqli_query($conectar, "UPDATE objetivo SET L='$L',L1='$L1', L2='$L2', L3='$L3',  M='$M', M1='$M1', M2='$M2', M3='$M3',  X='$X', X1='$X1', X2='$X2', X3='$X3', J='$J', J1='$J1', J2='$J2', J3='$J3', V='$V', V1='$V1', V2='$V2', V3='$V3', S='$S', S1='$S1', S2='$S2', S3='$S3', D='$D', D1='$D1', D2='$D2', D3='$D3' WHERE servicio_name='$servicio_name'");


if($query){

   echo "<script> alert('correcto');
    location.href = '../principal.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../principal.php';
    </script>";
}





?>