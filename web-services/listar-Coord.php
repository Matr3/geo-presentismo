<?php
    require_once "conn.php";
    $sql = "SELECT * FROM coordinadores";
    if(!$conn->query($sql)){
        echo "Error de Conexion.";
}
else{
      $result = $conn->query($sql);
      if($result->num_rows > 0){
      $return_arr['coordinadores'] = array();
      while($row = $result->fetch_array()){
      array_push($return_arr['coordinadores'], array(
                'coordinador_id'=>$row['coordinador_id'],
                'coordinador_name'=>$row['coordinador_name']
     ));
     }
     echo json_encode($return_arr);
}
}
?>