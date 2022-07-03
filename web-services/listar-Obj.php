<?php
    require_once "conn.php";
    if(isset($_GET['coordinador_name'])){
    $sql = "SELECT servicio_id, servicio_name FROM objetivo WHERE coordinador_id=(SELECT coordinador_id FROM coordinadores WHERE coordinador_name='".$_GET['coordinador_name']."')";
    if(!$conn->query($sql)){
        echo "Error de Conexion.";
}
else{
      $result = $conn->query($sql);
      if($result->num_rows > 0){
      $return_arr['objetivo'] = array();
      while($row = $result->fetch_array()){
      array_push($return_arr['objetivo'], array(
                'servicio_id'=>$row['servicio_id'],
                'servicio_name'=>$row['servicio_name']
     ));
     }
     echo json_encode($return_arr);
}
}
}
?>