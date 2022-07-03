<?php
    class Conexion {
        protected $dblink;
                
        function __construct() {
            $servidor = "mysql:host=localhost;port=3306;dbname=c2300479_gpsbd";
            $usuario = "c2300479_gpsbd";
            $clave = "Rolling2020";          
            $this->dblink = new PDO($servidor, $usuario, $clave);
            $this->dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dblink->exec("SET NAMES utf8");
        }
        
}
?>