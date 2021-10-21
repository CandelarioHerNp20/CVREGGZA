<div class="modal fade" id="ed_user" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar mis datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="m-5" method="post" enctype="multipart/form-data" id="editar_u">
                  <input type="hidden" name="id" id="id_u">
                  <div class="mb-3">
                           <label for="nombre" class="form-label">Nombre:</label>
                           <input type="text" name="nombre_u" class="form-control" id="nombre_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Apellidos" class="form-label">Apellidos:</label>
                           <input type="text" name="apellidos_u" class="form-control" id="apellidos_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Correo" class="form-label">Correo:</label>
                           <input type="mail" name="correo_u" class="form-control" id="correo_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Cont" class="form-label">Contraseña:</label>
                           <input type="password" name="cont_u" class="form-control" id="cont_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Curp" class="form-label">Curp:</label>
                           <input type="text" name="cp_u" class="form-control" id="cp_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Edad" class="form-label">Edad:</label>
                           <input type="num" name="edad_u" class="form-control" id="edad_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Telefono" class="form-label">Telefono:</label>
                           <input type="num" name="tel_u" class="form-control" id="tel_u" required>
                  </div>
                  <div class="mb-3">
                           <label for="Domicilio" class="form-label">Domicilio:</label>
                           <input type="text" name="Domicilio" class="form-control" id="Domicilio" required>
                  </div>
                  <div class="mb-3">
                           <label for="formFile" class="form-label">Foto:</label>
                           <input class="form-control" name="foto_u" type="file" >
                  </div>  
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" id="mod_us" id="mod_us" data-bs-dismiss="modal">Actualizar</a>
        </form> 
      </div>
    </div>
  </div>
</div>
    
              