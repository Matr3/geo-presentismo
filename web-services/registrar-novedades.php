<?php
    if  (
            ( !isset(  $_POST["fecha"]              ) )      ||
            ( !isset(  $_POST["hora"]              ) )      ||
            ( !isset(  $_POST["coord"]              ) )      ||
            ( !isset(  $_POST["obj"]              ) )      ||
            ( !isset(  $_POST["nov"]              ) )    
        )
        {
            $respuesta = array(
                "estado"=>"error"
            );
            
            echo json_encode($respuesta);
            exit();
        }
        
        
        $fecha          = $_POST["fecha"];
        $hora          = $_POST["hora"];
        $coord          = $_POST["coord"];
        $obj          = $_POST["obj"];
        $nov          = $_POST["nov"];


        require_once '../negocio/Nov.clase.php';
        $objNov = new Nov();
        $objNov->setFecha($fecha);
        $objNov->setHora($hora);
        $objNov->setCoord($coord);
        $objNov->setObj($obj);
        $objNov->setNov($nov);


        if ($objNov->agregar()==TRUE){
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