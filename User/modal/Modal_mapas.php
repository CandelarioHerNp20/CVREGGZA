<!-- Formulario De ubicaciones y domicilio -->
<div class="modal" tabindex="-1" id="reg_ubi">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registrar ubicacion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="cerrar"></button>
      </div>
      <div class="modal-body p-5">
        <di class="modal-body p-5">
          <!-- boton para obtener la unbicacion-->
          <p>Obtener ubicación</p>
            <button class="btn btn-primary" onclick="getLocation()">Obtener</button>
            <p id="demo"></p>
              <script>
              var x = document.getElementById("demo");

              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                } else { 
                  x.innerHTML = "Geolocalización no soportada en este navegador .";
                }
              }

              function showPosition(position) {
                x.innerHTML = "Latitud: " + position.coords.latitude + 
                "<br>Longitud: " + position.coords.longitude;
                document.getElementById("latitud").value = position.coords.latitude;
                document.getElementById("longitud").value = position.coords.longitude;
              }
              </script>
        </di>
       <form  method="post" enctype="multipart/form-data" id="form_add_map">
       <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Latitud: </label>
            <input type="number"  name="latitud" class="form-control" id="latitud" required="true"></input>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Longitud: </label>
            <input type="number" min="10" max="250" step="3" name="longitud" class="form-control" id="longitud" required="true"></input>
         </div>  
       
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Producto: </label>
            <input type="number" min="10" max="350" step="3"  name="producto_nm" class="form-control" id="producto_nm" required="true"></input>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Localidad: </label>
            <input type="text" min="10" max="250" step="3" name="dom_loc" class="form-control" id="dom_loc" required="true"></input>
         </div>

         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Calle o sección: </label>
            <input type="text" min="10" max="250" step="3" name="calle_sc" class="form-control" id="calle_sc" required="true"></input>
         </div>
         <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Número de domicilio: </label>
            <input type="text" min="10" max="250" step="3" name="dom_nm" class="form-control" id="dom_nm" required="true"></input>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="cerrar_nm" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" name="btn_reg_map" id="btn_reg_map" class="btn btn-primary" data-bs-dismiss="modal">Registrar</button>
        </div>
      </form>
    </div>
  </div>
</div>