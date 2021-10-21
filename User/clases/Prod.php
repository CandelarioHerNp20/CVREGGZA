<?php 
class ProdDat {
    private $id_prd;
    private $nombre_prd;
    private $tipo_prd;
    private $precio_cubo;
    private $precio_caja;
    private $foto_prd;
    private $usuario_prd;
    
    public function __construct($nombre_prd,$tipo_prd,$precio_cubo,$precio_caja,$foto_prd,$usuario_prd)
    {
        $this->nombre_prd=$nombre_prd;
        $this->tipo_prd=$tipo_prd;
        $this->precio_cubo=$precio_cubo;
        $this->precio_caja=$precio_caja;
        $this->foto_prd=$foto_prd;
        $this->usuario_prd=$usuario_prd;

    }
    public function setId_prd($id_prd){
        $this->id_prd=$id_prd;
    }

    public function getId_prd(){
        return $this->id_prd;
    }

    public function setNombre_prd($nombre_prd){
        $this->nombre_prd=$nombre_prd;
    }

    public function getNombre_prd(){
        return $this->nombre_prd;
    }

    public function setTipo_prd($tipo_prd){
        $this->tipo_prd=$tipo_prd;
    }

    public function getTipo_prd(){
        return $this->tipo_prd;
    }

    public function setPrecio_cubo($precio_cubo){
        $this->precio_cubo=$precio_cubo;
    }

    public function getPrecio_cubo(){
        return $this->precio_cubo;
    }

    public function setPrecio_caja($precio_caja){
        $this->precio_caja=$precio_caja;
    }

    public function getPrecio_caja(){
        return $this->precio_caja;
    }

    public function setFoto_prd($foto_prd){
        $this->foto_prd=$foto_prd;
    }

    public function getFoto_prd(){
        return $this->foto_prd;
    }

    public function setUsuario_prd($usuario_prd){
        $this->usuario_prd=$usuario_prd;
    }

    public function getUsuario_prd(){
        return $this->usuario_prd;
    }

}
?>