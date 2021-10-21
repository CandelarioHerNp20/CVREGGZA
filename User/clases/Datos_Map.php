<?php
require_once("Conex_DB.php");
require_once("Mapa.php");
require_once("plantilla.php");

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class MapaDatos extends Conexion implements plantillaDatos{
    private $sql_insertar="INSERT INTO mapa (latitud_map,longitud_map,id_prod_map,localidad_map,calle_seccion_map,numero_dom_map)
        values(?,?,?,?,?,?)";
    private $sql_modificar="UPDATE mapa SET latitud_map=?,longitud_map=?,id_prod_map=?,localidad_map=?,calle_seccion_map=?,numero_dom_map=? WHERE id_map=?";
    private $sql_eliminar="DELETE FROM mapa WHERE id_map=?";
    private $sql_leerTodo="SELECT * FROM mapa";
    private $sql_leer="SELECT * FROM mapa WHERE id_map=?";
    private $conex;

    public function __construct()
    {
        $this->conex=$this->conectar();
    }
    public function crear ($objeto){
        
        try{
            $consulta=$this->conex->prepare($this->sql_insertar);
            $consulta->bind_param('ddisss',$objeto->getLatitud_map(),$objeto->getLongitud_map(),$objeto->getId_prod_map(),$objeto->getLocalidad_map(),
                $objeto->getCalle_seccion_map(),$objeto->getNumero_dom_map());
            $resultado=$consulta->execute();
            return $resultado;
            echo "ejecutando registro de ubicaciones";

        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo " Error al crear el mapa";
        }finally{
            $this->conex->close();
        }
        
        

    }

    public function modificar($objeto)
    {
        try {
            $consulta=$this->conex->prepare($this->sql_modificar);
            $consulta->bind_param('ddisss',$objeto->getLatitud_map(),$objeto->getLongitud_map(),$objeto->getLocalidad_map(),
                $objeto->getCalle_seccion_map(),$objeto->getNumero_dom_map());
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            echo " Función de  modificacion mapa";
        }finally{
            $this->conex->close();
        }

    }

    public function eliminar($id){
        try {
            $consulta=$this->conex->prepare($this->sql_eliminar);
            $consulta->bind_param('i',$id_map);
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            echo " Función de eliminar mapas";
        }finally{
            $this->conex->close();
        }

    }

    public function leerTodo(){
        $domicilio=array();
        $map=null;
        try {
            $consulta=$this->conex->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $map=new MapaDat($fila[1],$fila[2],$fila[3],$fila[4],$fila[5]);
                $map->setId_map($fila[0]);

                array_push($domicilio,$map);

            }

        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            echo " Función de lectura de mapas";
        }finally{
            $this->conex->close();
        }
        return $domicilio;

    }

    public function leer($id_map){
        $domicilio=null;
        try{
            $consulta=$this->conex->prepare($this->sql_leer);
            $consulta->bind_param('i',$id_map);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $domicilio=new MapaDat($fila[1],$fila[2],$fila[3],$fila[4],$fila[5]);
                $domicilio->setId_map($fila[0]);
            }

        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
        }finally{
            $this->conex->close();
        }
        return $domicilio;

    }
}   

?>