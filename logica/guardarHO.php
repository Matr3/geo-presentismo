<?php
 require 'conexion.php';

 $id = "";
 $servicio_name=$_POST['servicio_name'];
 $T1=$_POST['T1'];
 $T2=$_POST['T2'];
 $T3=$_POST['T3'];


//$insertar = "UPDATE objetivo SET coordinador_id='$var1' WHERE servicio_name='$servicio_name'";


$query = mysqli_query($conectar, "UPDATE objetivo SET T1='$T1', T2='$T2', T3='$T3' WHERE servicio_name='$servicio_name'");




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