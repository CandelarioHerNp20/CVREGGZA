<?php
require_once('../clases/Datos_User.php');

$u=new Usuarios();
$guardado=false;
$resultado=null;




if(isset($_FILES['foto_user_up'])){
    $nombre=basename($_FILES['foto_user_up']['name']);
    $ruta='../../img/'.$nombre;

    if(move_uploaded_file($_FILES['foto_user_up']['tmp_name'],$ruta)){
        $user=new Usuario($_POST['nombre_user_up'],$_POST['apellidos_user_up'],
        $_POST['edad_u_user_up'],$_POST['tel_user_up'],
            $_POST['dom_u'],$nombre,$_POST['tipo_u']);
        $user->setId_u($_POST['id_u']);
        $resultado=$u->modificar($user);
        $guardado=true;
        echo "Actualizado 1";
    }

}
if(!$guardado){
    $user=new Usuario($_POST['nombre_u'],$_POST['apellidos_u'],
        $_POST['correo_u'],$_POST['cont_u'],$_POST['cp_u'],$_POST['edad_u'],
        $_POST['tel_u'],$_POST['dom_u'],"default.svg",$_POST['tipo_u']);
    $res=$u->crear($user);
    $guardado=true;
    echo "Guardado";
    
        
}
//header('Location: ../Panel.php');

echo $resultado;


?>