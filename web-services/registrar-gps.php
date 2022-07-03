<?php
    if  (
            ( !isset(  $_POST["direccion"]        ) )     ||
            ( !isset(  $_POST["lat"]              ) )     ||
            ( !isset(  $_POST["lng"]              ) )      ||
            ( !isset(  $_POST["fecha"]              ) )      ||
            ( !isset(  $_POST["hora"]              ) )      ||
            ( !isset(  $_POST["coord"]              ) )      ||
            ( !isset(  $_POST["obj"]              ) )     
        )
        {
            $respuesta = array(
                "estado"=>"error"
            );
            
            echo json_encode($respuesta);
            exit();
        }
        
        
        $direccion      = $_POST["direccion"];
        $lat       = $_POST["lat"];
        $lng          = $_POST["lng"];
        $fecha          = $_POST["fecha"];
        $hora          = $_POST["hora"];
        $coord          = $_POST["coord"];
        $obj          = $_POST["obj"];


        require_once '../negocio/Gps.clase.php';
        $objGps = new Gps();
        $objGps->setDireccion($direccion);
        $objGps->setLat($lat);
        $objGps->setLng($lng);
        $objGps->setFecha($fecha);
        $objGps->setHora($hora);
        $objGps->setCoord($coord);
        $objGps->setObj($obj);


        if ($objGps->agregar()==TRUE){
            $respuesta = array(
                "estado"=>"exito"
            );
        }else{
            $respuesta = array(
                "estado"=>"error"
            );
        }
        
        //echo json_encode($respuesta);
        echo json_encode($respuesta);
        
?>