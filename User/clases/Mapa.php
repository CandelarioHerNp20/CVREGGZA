<?php 
class MapaDat {
    private $id_map;
    private $latitud_map;
    private $longitud_map;
    private $id_prod_map;
    private $localidad_map;
    private $calle_seccion_map;
    private $numero_dom_map;
    
    public function __construct($latitud_map,$longitud_map,$id_prod_map,$localidad_map,$calle_seccion_map,$numero_dom_map)
    {
        $this->latitud_map=$latitud_map;
        $this->longitud_map=$longitud_map;
        $this->id_prod_map=$id_prod_map;
        $this->localidad_map=$localidad_map;
        $this->calle_seccion_map=$calle_seccion_map;
        $this->numero_dom_map=$numero_dom_map;

    }
    public function setId_map($id_map){
        $this->id_map=$id_map;
    }

    public function getId_map(){
        return $this->id_map;
    }
    public function setLatitud_map($latitud_map){
        $this->latitud_map=$latitud_map;
    }

    public function getLatitud_map(){
        return $this->latitud_map;
    }

    public function setLongitud_map($longitud_map){
        $this->longitud_map=$longitud_map;
    }

    public function getLongitud_map(){
        return $this->longitud_map;
    }

    public function setId_prod_map($id_prod_map){
        $this->id_prod_map=$id_prod_map;
    }
    public function getId_prod_map(){
        return $this->id_prod_map;
    }

    public function setLocalida_map($localidad_map){
        $this->localidad_map=$localidad_map;
    }
    public function getLocalidad_map(){
        return $this->localidad_map;
    }

    public function setCalle_seccion_map($calle_seccion_map){
        $this->calle_seccion_map=$calle_seccion_map;
    }

    public function getCalle_seccion_map(){
        return $this->calle_seccion_map;
    }

    public function setNumero_dom_map($numero_dom_map){
        $this->numero_dom_map=$numero_dom_map;
    }
    public function getNumero_dom_map(){
        return $this->numero_dom_map;
    }
}
    ?>