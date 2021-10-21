<?php
require_once('../clases/Datos_User.php');

$u=new Usuario_c();
$guardado=false;



    if(isset($_FILES['foto_u'])){
        $nombre=basename($_FILES['foto_u']['name']);
        $ruta="../../img/Usuarios/".$nombre;
        if(move_uploaded_file($_FILES['foto_u']['tmp_name'],$ruta)){
            $user=new Usuario($_POST['nombre_u'],$_POST['apellidos_u'],
            $_POST['correo_u'],$_POST['cont_u'],$_POST['cp_u'],$_POST['edad_u'],$_POST['tel_u'],
                $_POST['dom_u'],$nombre,$_POST['tipo_u']);
            $res=$u->crear($user);
            $guardado=true;
        header('Location: ../../Index.php');
            
        }
    }
    if(!$guardado){
        $user=new Usuario($_POST['nombre_u'],$_POST['apellidos_u'],
            $_POST['correo_u'],$_POST['cont_u'],$_POST['cp_u'],$_POST['edad_u'],
            $_POST['tel_u'],$_POST['dom_u'],"../../img/Usuarios/I_defualt.svg",$_POST['tipo_u']);
        $res=$u->crear($user);
        $guardado=true;
        header('Location: ../../Index.php');
        
            
    }
    
   
    


?>