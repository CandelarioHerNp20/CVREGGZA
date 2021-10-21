<?php
require_once('../clases/Datos_User.php');

$p=new Usuario_c();
$user=$p->leer_user($_POST['id_u']);

    $datos.="
    <h1>Nombre: <small>".$user->getNombre_u()."</small></h1><br>
    <h3>Apellidos: <small>".$user->getApellidos_u()."</small></h3><br>
    <h3>Correo: <small>".$user->getCorreo_u_u()."</small></h3><br>
    <h3>Contraseña: <small>".$user->getCont_u()."</small></h3><br>
    <h3>Curp <small>".$user->getCp_u()."</small></h3><br>
    <h3>Edad: <small>".$user->getEdad_u()."</small></h3><br>
    <h3>Número telefonico: <small>".$user->getTel_u()."</small></h3><br>
    <h3>Domicilio: <small>".$user->getDom_u()."</small></h3><br>
        <img src='./img/".$user->getFoto_u()."' width='250px' heigth=''>
    <br>
    <h3>Nombre: <small>".$user->getDom_u()."</small></h3><br>
    ";
    echo $datos;
?>
