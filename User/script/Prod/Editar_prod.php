<?php
require_once('../../clases/Datos_prod.php');

$p=new Productos();
$guardado=false;
$resultado=null;




if(isset($_FILES['foto_u'])){
    $nombre=basename($_FILES['foto_prd']['name']);
    $ruta='../img/'.$nombre;

    if(move_uploaded_file($_FILES['foto_prd']['tmp_name'],$ruta)){
        $prod=new ProdDat($_POST['nombre_prd'],$_POST['tipo_prd'],
            $_POST['precio_cubo'],$_POST['precio_caja'],$nombre);
        $prod->setId_prd($_POST['id_prd']);
        $resultado=$p->EditPrd($prod);
        $guardado=true;
        echo "Actualizado";
    }

}
if(!$guardado){
    $prod=new ProdDat($_POST['nombre_prd'],$_POST['tipo_prd'],
        $_POST['precio_cubo'],$_POST['precio_caja'],'default.png');
    $prod->setId_prd($_POST['id_prd']);
    $resultado=$p->EditPrd($prod);
    $guardado=true;
    echo "Guardado";
    
        
}
//header('Location: ../Panel.php');

echo $resultado;


?>