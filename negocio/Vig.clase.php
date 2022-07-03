<?php
    require_once '../datos/Conexion.clase.php';
    class Gps extends Conexion{
        private $codigo;
        private $direccion;
        private $lat;
        private $lng;
        private $fecha;
        private $hora;
        private $coord;
        private $obj;
        private $vig;
        public function getCodigo()
        {
            return $this->codigo;
        }
        
        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
            return $this;
        }
  public function getDireccion()
  {
      return $this->direccion;
  }
  
  public function setDireccion($direccion)
  {
      $this->direccion = $direccion;
      return $this;
  }
  public function getLat()
  {
      return $this->lat;
  }
  
  public function setLat($lat)
  {
      $this->lat = $lat;
      return $this;
  }
  public function getLng()
  {
      return $this->lng;
  }
  
  public function setLng($lng)
  {
      $this->lng = $lng;
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
public function getVig()
  {
      return $this->vig;
  }
  
  public function setVig($vig)
  {
      $this->vig = $vig;
      return $this;
  }

  public function agregar() {
            $sql = "insert into gpscliente( direccion, lat, lng, fecha, hora, coord, obj, vig) values(:dir, :lat, :lng, :fecha, :hora, :coord, :obj, :vig);";
            
            $sentencia = $this->dblink->prepare($sql);
            $direccion = $this->getDireccion();
            $lat = $this->getLat();
            $lng = $this->getLng();
            $fecha = $this->getFecha();
            $hora = $this->getHora();
            $coord = $this->getCoord();
            $obj = $this->getObj();
            $vig = $this->getVig();
            $sentencia->bindParam(":dir",  $direccion);
            $sentencia->bindParam(":lat", $lat);
            $sentencia->bindParam(":lng", $lng );
            $sentencia->bindParam(":fecha", $fecha );
            $sentencia->bindParam(":hora", $hora );
            $sentencia->bindParam(":coord", $coord );
            $sentencia->bindParam(":obj", $obj );
            $sentencia->bindParam(":vig", $vig );
            $resultado = $sentencia->execute();
            
            if ($resultado != 1){
                //ocurrio un error al insertar
                return FALSE;
            }
            
            //Insertó correctamente
            return TRUE;
            
        }
    }