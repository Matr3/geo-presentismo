<?php
    require_once '../datos/Conexion.coord.php';
    class Fruta extends Conexion{
        public function listar(){
            $sql = "SELECT * FROM frutas";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();            
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }  
        }
?>