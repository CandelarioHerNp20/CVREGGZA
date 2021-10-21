<?php
class Producto{
    private $id_producto;
    private $nombre;
    private $tipo;
    private $cantidad;
    private $precio_por_caja;
    private $precio_por_cubo;
    private $foto;

    public function __construct($id_producto, $nombre, $tipo, $cantidad, $precio_por_caja, $precio_por_cubo, $foto)
    {
      $this->id_producto=$id_producto;
      $this->nombre=$nombre;
      $this->tipo=$tipo;
      $this->cantidad=$cantidad;   
      $this->precio_por_caja=$precio_por_caja;
      $this->precio_por_cubo=$precio_por_cubo;
      $this->foto=$foto;

    }
    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    }
    public function getId_producto(){
        return $this->id_producto;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }

    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function setPrecio_por_caja($precio_por_caja){
        $this->precio_por_caja=$precio_por_caja;
    }
    public function getPrecio_por_caja(){
        return $this->precio_por_caja;
    }

    public function setPrecio_por_cubo($precio_por_cubo){
        $this->precio_por_cubo=$precio_por_cubo;
    }
    public function getPrecio_por_cubo(){
        return $this->precio_por_cubo;
    }

    public function setFoto($foto){
        $this->foto=$foto;
    }
    public function getFoto(){
        return $this->foto;
    }
}
?>