<?php
class Publicacion{
    private $id_publicacion;
    private $fecha;
    private $producto;

    public function __construct($id_publicacion, $fecha, $producto)
    {
        $this->id_publicacion=$id_publicacion;
        $this->fecha=$fecha;
        $this->producto=$producto; 
    }
    public function setId_publicacion($id_publicacion){
        $this->id_publicacion=$id_publicacion;
    }
    public function getId_publicacion(){
        return $this->id_publicacion;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
    public function getFecha(){
        return $this->fecha;
    }

    public function setProducto($producto){
        $this->producto=$producto;
    }
    public function getProducto(){
        return $this->producto;
    }

}


?>