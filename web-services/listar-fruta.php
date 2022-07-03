<?php
    require_once '../negocio/Fruta.clase.php';
    $objFruta = new Fruta();
    $resultado = $objFruta->listar();
    $respuesta = array(
        "usuario"=>$resultado
    );
    echo json_encode($respuesta);   
?>