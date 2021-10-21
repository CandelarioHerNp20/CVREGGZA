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
            $_SESSION['Usuario']['foto_u']=$usuario_log->getFoto_u();
            $_SESSION['Usuario']['tipo_u']=$usuario_log->getTipo_u();
            $tipo_u=$usuario_log->getTipo_u();

            if ($tipo_u='Comprador') {
                echo $tipo_u;
                header("location: www.google.com");
            }
            if ($tipo_u='Productor') {
                echo $tipo_u;
                header("location: www.yahoo.com");
            }
            if ($tipo_u='Admin') {
                echo $tipo_u;
                header("location: ../Admin/Panel_admin.php");
            }
            else {
                echo $tipo_u;
                echo " Lo sentimos a ocurrido un error porfavor verifique sus datos";
                header("Location: Index.php");
            }
            echo $tipo_u;
    
        
    //header("Location: /User/Panel.php");
    } 
    else {
        $tipo_u="Datos incorrectos porfavor reintentelo";
    };

    echo $tipo_u;

?>