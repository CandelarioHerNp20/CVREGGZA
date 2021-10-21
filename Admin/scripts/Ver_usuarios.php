<?php
//Obtención de info de la base de datos en una tabla 
require_once('../../User/clases/Datos_User.php');


$u=new Usuario_c();
$usuarios=$u->leerTodo();

$tabla_usuarios="";

foreach($usuarios as $usu){
    $tabla_usuarios.="
    <tr>
        <td>".$usu->getId_u()."</td>
        <td id='nomb_".$usu->getId_u()."'>".$usu->getNombre_u()."</td>
        <td id='ape_".$usu->getId_u()."'>".$usu->getApellidos_u()."</td>
        <td id='edad_".$usu->getId_u()."'>".$usu->getEdad_u()."</td>
        <td id='tel_".$usu->getId_u()."'>".$usu->getTel_u()."</td>
        <td id='fot_".$usu->getId_u()."'><img src='../img/Usuarios/".$usu->getFoto_u()."' width='50px'></td>
        <td id='tip_".$usu->getId_u()."'>".$usu->getTipo_u()."</td>
        <td><a class='btn btn-success editar' data-id='".$usu->getId_u()."' data-bs-toggle='modal' data-bs-target='#modal_mod_u'>Editar</a></td>
        <td><a class='btn btn-danger eliminar' data-id='".$usu->getId_u()."' data-bs-toggle='modal' data-bs-target='#modal_eli_u' >Eliminar</a></td>
    
        
    </tr>
    ";
}
echo $tabla_usuarios;

?>