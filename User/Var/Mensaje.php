<?php
class Mensaje{
    private $id_compra;
    private $ubicacion;
    private $producto;

    public function __construct($id_compra, $ubicacion, $producto)
    {
        $this->id_compra=$id_compra;
        $this->ubicacion=$ubicacion;
        $this->producto=$producto;  
    }
    public function setId_compra($id_compra){
        $this->id_compra=$id_compra;
    }
    public function getId_compra(){
        return $this->id_compra;
    }

    public function setUbicacion($ubicacion){
        $this->ubicacion=$ubicacion;
    }
    public function getUbicacion(){
        return $this->ubicacion;
    }

    public function setProducto($producto){
        $this->producto=$producto;
    }
    public function getProducto(){
        return $this->producto;
    }

}
?>