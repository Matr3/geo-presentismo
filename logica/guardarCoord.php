<?php
 require 'conn.php';
  
 $coordinador_id = "";
 $coordinador_name = $_POST['coord'];


$insertar = "INSERT INTO coordinadores VALUES ('$coordinador_id', '$coordinador_name') ";

$query = mysqli_query($conectar, $insertar);

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