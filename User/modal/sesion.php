<!--Modal inicio de sesión -->
<div class="modal" tabindex="-1" id="modal_login_user">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Iniciar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body p-5">
         
       <form  method="post" id="inicio_ses">
     
         <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Correo: </label>
                  <input type="email" name="correo_log" class="form-control" id="correo_log" required></input>
         </div>
         <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Contraseña: </label>
                  <input type="password" name="cont_log" class="form-control" id="cont_log" required></input>
         </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="cerrar" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" id="log" class="btn btn-primary" data-bs-dismiss="modal">Iniciar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modal_logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Iniciar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body p-5">
         
       <form  method="post" id="cerar_sesion">
         <p> ¿Realmente deseas cerrar tu sesión?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="cerrar_logouts" data-bs-dismiss="modal">No</button>
        <button type="button" id="logout" class="btn btn-primary" data-bs-dismiss="modal">Si</button>
        </form>
      </div>
    </div>
  </div>
</div>

