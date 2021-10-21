<!--Regisro de productos -->
<div class="modal" tabindex="-1" id="add_producto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="cerrar"></button>
      </div>}
      <div class="modal-body p-5">
        <!--Form-->
       <form  method="post" enctype="multipart/form-data"  id="Reg_product">
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nombre: </label>
            <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" required="true"></input>
         </div>
         <div class="mb-3">
         <label for="exampleFormControlTextarea1" class="form-label">Tipo: </label>
          <select class="form-select control" id="tipo_producto" name="tipo_producto" required>
            <option value="Manzana">Manzana</option>
            <option value="Pera">Pera</option>
            <option value="Durazno">Durazno</option>
            <option value="Ciruela">Ciruela</option>
            <option value="Aguacate">Aguacate</option>
            <option value="Otro">Otro</option>
          </select>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Precio por cubeta: </label>
            <input type="number" min="10" max="350" step="3"  name="precio_cb" class="form-control" id="precio_cb" required="true"></input>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Precio por caja: </label>
            <input type="number" min="10" max="250" step="3" name="precio_cj" class="form-control" id="precio_cj" required="true"></input>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Fotografia: </label>
            <input class="control" type="file" name="foto_producto" id="foto_producto">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Solo ID registrados: </label>
            <input class="control" type="text" name="id_user_prd" id="id_user_prd">
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cerrar_reg" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" name="r2" id="r2" class="btn btn-primary" data-bs-dismiss="modal">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>