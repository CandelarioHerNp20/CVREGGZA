<?php
//Obtención de info de la base de datos en una tabla 
require_once('../../clases/Datos_prod.php');


$pr=new Productos();
$productos=$pr->VerProdsUser($usuario_prd);
// tarjeta
$tarjeta_prd_u="";

foreach($productos as $prod_u){
    $tarjeta_prd_u.="
    <div>
    <div class='row'>
        <div class='card' syle='width: 18rem;'>".$prod_u->getId_prd().">
            <img class='rounded igm-fluid' src='../img/Productos/".$prod_u->getFoto_prd()."' width='70px'>
        <h5 class='card-title' id='nomb_p".$prod_u->getId_prd()."'>".$prod_u->getNombre_prd()."</h5>
        <a class=list-group list-group-flush'>
            <div class='card-body'>
                <a class='list-group-item' id='tip_p".$prod_u->getId_prd()."'>Tipo: ".$prod_u->getTipo_prd()."</a>
                <a class='list-group-item' id='pre_c".$prod_u->getId_prd()."'>Precio por bote: &#36 ".$prod_u->getPrecio_cubo()."</a>
                <a class='list-group-item' id='pre_cj".$prod_u->getId_prd()."'> Precio por caja: &#36 ".$prod_u->getPrecio_caja()."</a>
                <a class='list-group-item' id='pre_cj".$prod_u->getId_prd()."'> Usuario: ".$prod_u->getUsuario_prd()."</a>
                <a class='btn btn-success editar' data-id='".$prod_u->getId_prd()."' data-bs-toggle='modal' data-bs-target='#modal_edit_prd'>Editar</a>
                <a class='btn btn-danger eliminar' data-id='".$prod_u->getId_prd()."' data-bs-toggle='modal' data-bs-target='#modal_eli_prd'>Eliminar</a>
            </div>
        </a>
        </div>
        </div>
    </div>
    ";
}
echo $tarjeta_prd_u;