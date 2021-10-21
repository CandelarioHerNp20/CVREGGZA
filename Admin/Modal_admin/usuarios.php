<div class="modal fade" id="modal_mod_u" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modificar usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="m-5" method="post" enctype="multipart/form-data" id="form_modificar_user">
        <input type="hidden" name="id_u" id="id_u">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre_user_up" placeholder="Nombre del usuario" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos_user_up" class="form-control" id="apellidos_user_up" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Edad:</label>
                <input type="num" name="edad_user_up" class="form-control" id="edad_user_up" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Telefono:</label>
                <input type="tel" name="tel_user_up" class="form-control" id="tel_user_up" placeholder="Telefono" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Foto:</label>
                <input type="file" name="foto_user_up" class="form-control" id="foto_user_up" placeholder="Telefono" required>
              </div>
            <div>
              <label for="exampleFormControlTextarea1" class="form-label">Tipo: </label>
                <select class="form-select control" id="tipo_producto" name="tipo_producto" required>
                  <option value="Productor">Productor</option>
                  <option value="Comprador">Comprador</option>
                  <option value="Admin">Admin</option>  
                </select>
            </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" id="mod_usuario" data-bs-dismiss="modal">Modificar</a>
      </form> 
      </div>
    </div>
  </div>
</div>

<!-- modal de eliminación de pokemon -->
<div class="modal fade" id="modal_eli_u" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" id="form_eliminar_user">
        <input type="hidden" name="id" id="id_e">
      </form>
        <p>Este usuario sera eliminado de la base de datos<br> ¿Desea continuar con la operación?
        
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="eliminar_usuario">Eliminar</button>
      </div>
    </div>
  </div>
</div>