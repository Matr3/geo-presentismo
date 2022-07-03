<?php
    require_once './datos/Conexion.Coord.php';
    class Coord extends Conexion{
        public function listar(){
            $sql = "SELECT * FROM coordinadores";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();            
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }  
        }
?>