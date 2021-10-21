<?php
require_once("Conex_DB.php");
require_once("Prod.php");
require_once("plantilla.php");

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);
class Productos extends Conexion implements plantillaDatos_prd{
    private $sql_isertar_prd="INSERT INTO producto (nombre_prd,tipo_prd,Precio_cubo,Precio_caja,Foto_prod,usuario_prd) VALUES (?,?,?,?,?,?)";
    private $sql_modificar_prd="UPDATE producto SET nombre_prd=?,tipo_prd=?,Precio_cubo=?,Precio_caja=? WHERE usuario_prd=?";
    private $sql_eliminar_prd="DELETE FROM producto WHERE id_prd=?";
    private $sql_ver_prd_u="SELECT * FROM producto WHERE usuario_prd=?";
    private $sql_ver_todo_prd="SELECT * FROM producto";
    private $sql_buscar_prd="SELECT * FROM producto WHERE nombre_prd like ?";

    private $conex;

    public function __construct()
    {
        $this->conex=$this->conectar();
    }

    public function RegPrd($objeto){
        try {
            $consulta=$this->conex->prepare($this->sql_isertar_prd);
            $consulta->bind_param('ssddsi',$objeto->getNombre_prd(),$objeto->getTipo_prd(),$objeto->getPrecio_cubo(),
                $objeto->getPrecio_caja(),$objeto->getFoto_prd(),$objeto->getUsuario_prd());
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            echo "Funcion de registro prod";
        }finally{
            $this->conex->close();
        }

    }

    public function EditPrd($objeto){
        try{
            $consulta=$this->conex->prepare($this->sql_modificar_prd);
            $consulta->bind_param('ssddsi',$objeto->getNombre_prd(),$objeto->getTipo_prd(),$objeto->getPrecio_cubo(),$objeto->getPrecio_caja(),$objeto->getFoto_prd(),$objeto->getUsuario_prd());
            $resultado=$consulta->execute();
            return $resultado;
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo " Error en la funcion de editar producto";
        }finally{
            $this->conex->close();
        }

    }

    public function DelPrd($id_prd){
        try{
            $consulta=$this->conex->prepare($this->sql_eliminar_prd);
            $consulta->bind_param('i',$valor);
            $resultado=$consulta->execute();
            return $resultado;
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
        }finally{
            $this->conex->close();
        }

    }
    // Funcion para mostra al comprador sus productos
    public function VerProdsUser($usuario_prd){
        $productos=array();
        $prod_u=null;
    $usuario_prd=5;
        try{
            $consulta=$this->conex->prepare($this->sql_ver_prd_u);
            $consulta->bind_param('i',$usuario_prd);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $prod_u=new ProdDat($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6]);
                $prod_u->setId_prd($fila[0]);
                $prod_u->setId_prd($fila[6]);
                
                array_push($productos,$prod_u);
            }
            echo " vista de productos por id de usuario ";

        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo "Error en la lectura de productos 'leer VerProdsUser'";
        }finally{
            $this->conex->close();
        }
        return $productos;

    }

    public function VerPrd($value)
    {
        $producto=array();
        $produc=null;
        try{
            $consulta=$this->conex->prepare($this->sql_buscar_prd);
            $consulta->bind_param('s',$value);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $produc=new ProdDat($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6]);
                $produc->setId_prd($fila[0]);
            }
        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo " Error en la funcion de lectura y busqueda";
        }finally{
            $this->conex->close();
        }
        return $producto;

    }
    public function leer($id_prd){
        $producto=null;
        try{
            $consulta=$this->conex->prepare($this->sql_leer);
            $consulta->bind_param('i',$id_prd);
            $consulta->execute();
            $res=$consulta->get_result();

            while($fila=mysqli_fetch_array($res)){
                $producto=new ProdDat($fila[1],$fila[2],$fila[3],$fila[4],$fila[5],$fila[6]);
                $producto->setId_prd($fila[0]);

            }

        }catch(mysqli_sql_exception $e){
            echo $e->getMessage();
            echo "Error en la lectura de productos 'leer'";
        }finally{
            $this->conex->close();
        }
        return $producto;
    }

}
?>
    