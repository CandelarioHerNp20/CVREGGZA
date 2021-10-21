<?php
    session_start();
    require_once("../clases/Datos_User.php");

    $s=new Usuario_c();

    $usuario_log=$s->login($_POST["correo_log"],$_POST["cont_log"]);


    $tipo_u=null;
    if($usuario_log!=null) {
            $_SESSION['Usuario']['id_u']=$usuario_log->getId_u();
            $_SESSION['Usuario']['nombre_u']=$usuario_log->getNombre_u();
            $_SESSION['Usuario']['apellidos_u']=$usuario_log->getApellidos_u();
            $_SESSION['Usuario']['correo_u']=$usuario_log->getCorreo_u();
            $_SESSION['Usuario']['tel_u']=$usuario_log->getTel_u();
            $_SESSION['Usuario']['foto_u']=$usuario_log->getFoto_u();
            $_SESSION['Usuario']['tipo_u']=$usuario_log->getTipo_u();
            $tipo_u=$usuario_log->getTipo_u();
            //echo $tipo_u;

    //header("Location: ../../Index.php");
    }else {
        echo " Usuario o contraseña desconocidos";
    }

    echo $tipo_u;

?>