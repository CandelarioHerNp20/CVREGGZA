<?php

mysqli_report(MYSQLI_REPORT_ALL);
class Conexion{
    private $user="";
    private $pass="";
    private $db="";
    private $server="localhost";
    private $conex;
    
    public function setDB($db){
        $this->db=$db;
    }

    public function getBD(){
        return $this->db;
    }

    public function __construct()
    {
        $this->conectar();
    }

    protected function conectar(){
           try{
            $this->conex=new mysqli($this->server,$this->user,$this->pass,$this->db);
            if(!$this->conex->connect_errno){
               //echo " Conectado a la base de datos CVREGGZA";
            }
        }catch( mysqli_sql_exception $e){
            echo "Error: ".$e->getCode();
            echo "<br>";
            echo "Mensaje de error: ".$e->getMessage();
        }
        return $this->conex;
    }
}
    $c=new Conexion();
    // $c->conectar();*/


?>