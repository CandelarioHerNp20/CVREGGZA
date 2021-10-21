<?php
require_once('../clases/Datos_Map.php');


$m=new MapaDatos();
$guardado=false;
$resultado=null;


if(isset($_POST['latitud'],$_POST['longitud'])){
    $mapa=new MapaDat($_POST['latitud'],$_POST['longitud'],$_POST['producto_nm'],$_POST['dom_loc'],$_POST['calle_sc'],$_POST['dom_nm']);
        $resultado=$m->crear($mapa);
        $guardado=true;
        //echo "Script ejecutado";
    
}else{
    echo " No registrado";
}

echo $resultado;


?>