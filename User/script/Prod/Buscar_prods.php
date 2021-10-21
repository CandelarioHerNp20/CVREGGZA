<?php
require_once('../../clases/Datos_prod.php');


$sp=new Productos();
$value="%".$_POST['VerPrd']."%";
$producto=$sp->VerPrd($value);

$tab_result="";

foreach($producto as $produc){
    $bp=new Productos;
    $tipo_prd=$bp->leer($produc->getTipo_prd());

    $tab_result.="
    <tr>
        <td>".$produc->getId_prd()."</td>
        <td id='nom".$produc->getId_prd()."'>".$produc->getNombre_prd()."</td>
        <td id='tip".$produc->getId_prd()."'>".$produc->getTipo_prd()."</td>
        <td id='pre_c".$produc->getId_prd()."'>".$produc->getPrecio_cubo()."</td>
        <td id='pre_cj".$produc->getId_prd()."'>".$produc->getPrecio_caja()."</td>
        <td id='fot".$produc->getId_prd()."'>".$produc->getFoto_prd()."
            <img src='../../../img/Productos/".$produc->getFoto_prd()."' width='100px' heigth='100px'></td>
        <td><a class='btn btn-success edit' data-id='".$produc->getId_prd()."' data-bs-toggle='modal' data-bs-target='#mod_edit_p'>Editar</a></td>
        <td><a class='btn btn-danger del' data-id='".$produc->getId_prd()."' data-bs-toggle='modal' data-bs-target='#mod_del_p' >Eliminar</a></td>
    </tr>
    ";
}
echo $tab_result;
?>