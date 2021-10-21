<?php
require_once("Conex_DB.php");
require_once("Usuario.php");
require_once("plantilla.php");

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class Usuario_c extends Conexion implements plantillaDatos{
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
        try {
            $consulta=$this->conex->prepare($this->insertar_u);
            $consulta->bind_param('sssssiisss',$objeto->getNombre_u(),$objeto->getApellidos_u(),$objeto->getCorreo_u(),
                $objeto->getCont_U(),$objeto->getCp_u(),$objeto->getEdad_u(),$objeto->getTel_u(),
                $objeto->getDom_u(),$objeto->getFoto_u(),$objeto->getTipo_u());
            $resultado=$consulta->execute();
            return $resultado;
            
            }catch(mysqli_sql_exception $e){
                echo $e->getMessage();
                echo " Funcion de registro de usuarios";
            }finally{
                $this->conex->close();
            }

    }

    public function modificar($objeto){
        try {
            $consulta=$this->conex->prepare($this->modificar_u);
            $consulta->bind_param('sssssiisb',$objeto->getNombre_u(),$objeto->getApellidos_u(),$objeto->getCorreo_u(),
                $objeto->getCont_U(),$objeto->getCp_u(),$objeto->getEdad_u(),$objeto->getTel_u(),
                $objeto->getDom_u(),$objeto->getFoto_u());
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
        $usuarios=array();
        $usu=null;
        try {
            $consulta=$this->conex->prepare($this->leer_u);
            $consulta->execute();
            $resultado=$consulta->get_result();
            while($fila=mysqli_fetch_array($resultado)){
                //Despues del obtejo utilizar la clase del archivo Usuario.php
                $usu=new Usuario($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]);
                $usu->setId_u($fila[0]);
                array_push($usuarios,$usu);
            }
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo " Funcion de leer usuarios";
        }finally{
            $this->conex->close();
        } return $usuarios;
        

    }
//Consulta por id de usuario 
//revisar clases
public function leer_user($id_u){
    $usuario=null;
    try{
        $consulta=$this->conex->prepare($this->leer_user);
        $consulta->bind_param('i',$id_u);
        $consulta->execute();
        $resultado=$consulta->get_result();

        while($fila=mysqli_fetch_array($resultado)){
            $user=new Usuario($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],$fila[9],$fila[10]);
            $user->setId_u($fila[0]);

        }

    }catch(mysqli_sql_exception $e){
        echo $e->getMessage();
    }finally{
        $this->conex->close();
    }
        return $usuario;
    }

// Inicio de usuarios
    public function login($correo_u,$cont_u){
        $usuario_log=null;
        try{
            $consulta=$this->conex->prepare($this->login);
            $consulta->bind_param('ss',$correo_u,$cont_u);
            $consulta->execute();
            //Pasar los datos a un objeto
            $resultado=$consulta->get_result();
            while($fila=mysqli_fetch_array($resultado)){
                //Despues del obtejo utilizar la clase 
                $usuario_log=new Usuario($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6],$fila[7],$fila[8],
                    $fila[9],$fila[10]);
                $usuario_log->getId_u($fila[0]);
                /*
                echo "Hola: ".$fila[0];
                echo " Usuario: ".$fila[1];
                echo " Tipo: ".$fila[10];
                */
            }
            //echo " Login ejecutado ";

        } catch (mysqli_sql_exception $e){
            echo $e->getMessage();
            echo " Error en la funcion de inicio de sesión";
        }finally{
            $this->conex->close();
        }
        return $usuario_log;
    }
}

?>

