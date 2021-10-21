<?php
include "User/clases/Conex_DB.php";

$user_id=null;
$sql1= "select * from producto where id = ".$_GET["id"];
$query = $con->query($sql1);
$producto = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $producto=$r;
  break;
}
//tan solo con una mirada son tus besos, es tu voz que tiene mi alma enajenada nuestro amor sabe a chocolate
//
  }
?>

<?php if($producto!=null):?>

<form role="form" id="actualizar" >
  <div class="form-group">
    <label for="nombre_prd">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $producto->nombre_prd; ?>" name="nombre_prd" required>
  </div>
  <div class="form-group">
    <label for="tipo_prd">Tipo</label>
    <input type="text" class="form-control" value="<?php echo $producto->tipo_prd; ?>" name="tipo_prd" required>
  </div>
  <div class="form-group">
    <label for="Precio_cubo">Precio Cubo</label>
    <input type="text" class="form-control" value="<?php echo $producto->Precio_cubo; ?>" name="Precio_cubo" required>
  </div>
  <div class="form-group">
    <label for="Precio_caja">Precio Caja</label>
    <input type="text" class="form-control" value="<?php echo $producto->Precio_caja; ?>" name="Precio_caja" >
  </div>
  <div class="form-group">
    <label for="Foto_prod">Foto</label>
    <input type="text" class="form-control" value="<?php echo $producto->Foto_prod; ?>" name="Foto_prod" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>

<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("busqueda/actualizar.php",$("#actualizar").serialize(),function(data){
    });
    //alert("Agregado exitosamente!");
    //$("#actualizar")[0].reset();
    $('#editModal').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
    loadTabla();
  });
</script>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>