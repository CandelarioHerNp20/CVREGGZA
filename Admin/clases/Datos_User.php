<?php
require_once("Conex_DB.php");
require_once("Usuario.php");
require_once("plantilla.php");

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class Usuarios extends Conexion implements plantillaDatos{
    private $insertar_u="INSERT INTO usuario (nombre_u,apellidos_u,correo_u,cont_u,cp_u,edad_u,tel_u,dom_u,foto_u,tipo_u) VALUES (?,?,?,?,?,?,?,?,?,?)";
    private $modificar_u="UPDATE usuario SET nombre_u=?,apellidos_u=?,correo_u=?,cont_u=?,cp_u=?,edad_u=?,tel_u=?,dom_u=?,foto_u=? WHERE id=?";
    private $eliminar_u="DELETE FROM usuario WHERE id_u =?";
    private $leer_u="SELECT * FROM usuario";
    private $leer_user="SELECT * FROM usuario WHERE id_u=?";
    private $login="SELECT * FROM usuario WHERE correo_u=? AND cont_u=?";
    private $conex;

    public function __construct()
    {
        $this->conex=$this->conectar();
    }
    public function crear ($objeto){
        

    }

    public function modificar($objeto){
        try {
            $consulta=$this->conex->prepare($this->modificar_u);
            $consulta->bind_param('sssssiisb',$objeto->getNombre_u()
            ,$objeto->getApellidos_u(),$objeto->getCorreo_u()
                ,$objeto->getEdad_u(),$objeto->getTel_u()
                ,$objeto->getDom_u(),$objeto->getFoto_u());
            $resultado=$consulta->execute();
            return $resultado;
            
            }catch(mysqli_sql_exception $e){
                echo $e->getMessage();
                echo " Funcion de edición de usuarios";
            }finally{
                $this->conex->close();
            }
    }
   
    public function eliminar($id){
        try {
            $consulta=$this->conex->prepare($this->eliminar_u);
            $consulta->bind_param('i',$id);
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            echo "funcion de eliminación";
        }finally{
            $this->conex->close();
        }

    }

    public function leerTodo(){
        

    }
//Consulta por id de usuario 
//revisar clases
public function leer_user($id_u){

    }

// Inicio de usuarios
    public function login($correo_u,$cont_u){
        
    }
}

?>

