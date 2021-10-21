<?php
require_once('../clases/Datos_prod.php');
require_once('../clases/Datos_prod.php');

$p=new Productos();
$guardado=false;
$resultado=null;

if(isset($_FILES['foto_prd'])){
    $nombre=basename($_FILES['foto_producto']['name']);
    $ruta='../../img/Productos/'.$nombre;

    if(move_uploaded_file($_FILES['foto_prd']['tmp_name'],$ruta)){
        $producto=new ProdDat($_POST['nombre_producto'],$_POST['tipo_producto'],$_POST['precio_cb'],
            $_POST['precio_cj'],$nombre,$_POST['id_user_prd']);
        $resultado=$p->RegPrd($producto);
        $guardado=true;
    }
}
if(!$guardado){
    $producto=new ProdDat($_POST['nombre_producto'],$_POST['tipo_producto'],$_POST['precio_cb'],
            $_POST['precio_cj'],'../../img/Productos/Default.svg',$_POST['id_user_prd']);
        $resultado=$p->RegPrd($producto);
        $guardado=true;
    }

echo $resultado;


?>

