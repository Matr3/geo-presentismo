<?php
    require_once '../datos/Conexion.clase.php';
    class Nov extends Conexion{
        private $codigo;
        private $fecha;
        private $hora;
        private $coord;
        private $obj;
        private $nov;
        public function getCodigo()
        {
            return $this->codigo;
        }
        
        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
            return $this;
        }
public function getFecha()
  {
      return $this->fecha;
  }
  
  public function setFecha($fecha)
  {
      $this->fecha = $fecha;
      return $this;
  }

public function getHora()
  {
      return $this->hora;
  }
  
  public function setHora($hora)
  {
      $this->hora = $hora;
      return $this;
  }

public function getCoord()
  {
      return $this->coord;
  }
  
  public function setCoord($coord)
  {
      $this->coord = $coord;
      return $this;
  }

public function getObj()
  {
      return $this->obj;
  }
  
  public function setObj($obj)
  {
      $this->obj = $obj;
      return $this;
  }
public function getNov()
  {
      return $this->nov;
  }
  
  public function setNov($nov)
  {
      $this->nov = $nov;
      return $this;
  }

  public function agregar() {
            $sql = "insert into nov( fecha, hora, coord, obj, nov) values(:fecha, :hora, :coord, :obj, :nov);";
            
            $sentencia = $this->dblink->prepare($sql);
            $fecha = $this->getFecha();
            $hora = $this->getHora();
            $coord = $this->getCoord();
            $obj = $this->getObj();
            $nov = $this->getNov();
            $sentencia->bindParam(":fecha", $fecha );
            $sentencia->bindParam(":hora", $hora );
            $sentencia->bindParam(":coord", $coord );
            $sentencia->bindParam(":obj", $obj );
            $sentencia->bindParam(":nov", $nov );
            $resultado = $sentencia->execute();
            
            if ($resultado != 1){
                //ocurrio un error al insertar
                return FALSE;
            }
            
            //Insertó correctamente
            return TRUE;
            
        }
    }