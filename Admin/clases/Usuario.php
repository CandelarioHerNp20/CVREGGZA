<?php 
class Usuario {
    private $id_u;
    private $nombre_u;
    private $apellidos_u;
    private $correo_u;
    private $cont_u;
    private $cp_u;
    private $edad_u;
    private $tel_u;
    private $dom_u;
    private $foto_u;
    private $tipo_u;
    public function __construct($nombre_u,$apellidos_u,$correo_u,$cont_u,$cp_u,$edad_u,$tel_u,
        $dom_u,$foto_u,$tipo_u)
    {
        $this->nombre_u=$nombre_u;
        $this->apellidos_u=$apellidos_u;
        $this->correo_u=$correo_u;
        $this->cont_u=$cont_u;
        $this->cp_u=$cp_u;
        $this->edad_u=$edad_u;
        $this->tel_u=$tel_u;
        $this->dom_u=$dom_u;
        $this->foto_u=$foto_u;
        $this->tipo_u=$tipo_u;
    }

    public function setId_u($id_u){
        $this->id_u=$id_u;
    }
    
    public function getId_u(){
        return $this->id_u;
    }


    public function SetNombre_u($nombre_u){
        $this->nombre_u=$nombre_u;
    }

    public function getNombre_u(){
        return $this->nombre_u;
    }


    public function setApellidos_u ($apellidos_u){
        $this->apellidos_u=$apellidos_u;
    }

    public function getApellidos_u(){
        return $this->apellidos_u;
    }


    public function setCorreo_u($correo_u){
        $this->correo_u=$correo_u;
    }

    public function getCorreo_u(){
        return $this->correo_u;
    }


    public function setCont_u($cont_u){
        $this->cont_u=$cont_u;
    }

    public function getCont_u(){
        return $this->cont_u;
    }


    public function setCp_u($cp_u){
        $this->cp_u=$cp_u;
    }

    public function getCp_u(){
        return $this->cp_u;
    }


    public function setEdad_u($edad_u){
        $this->edad_u=$edad_u;
    }

    public function getEdad_u(){
        return $this->edad_u;
    }


    public function setTel_u($tel_u){
        $this->tel_u=$tel_u;
    }

    public function getTel_u(){
        return $this->tel_u;
    }

    
    public function setDom_u($dom_u){
        $this->dom_u=$dom_u;
    }

    public function getDom_u(){
        return $this->dom_u;
    }

    public function setFoto_u($foto_u){
        $this->foto_u=$foto_u;
    }

    public function getFoto_u(){
        return $this->foto_u;
    }

    public function setTipo_u($tipo_u){
        $this->tipo_u=$tipo_u;
    }

    public function getTipo_u(){
        return $this->tipo_u;
    }
}


?>