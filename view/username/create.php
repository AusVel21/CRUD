<!-- Ventana modal para crear registro -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Nuevo usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="store.php" method="post" autocomplete="off">
          <!-- Campos del formulario -->
          <div class="mb-3 row" id="id-field" style="display: none;">
            <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" id="modal-id" value="">
            </div>
        </div>

          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                  <input type="text" name="nombre" class="form-control" id="modal-nombre" value="" required>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">direccion</label>
              <div class="col-sm-10">
                  <input type="text" name="direccion" class="form-control" id="modal-direccion" value="" required>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">telefono</label>
              <div class="col-sm-10">
                  <input type="text" name="telefono" class="form-control" id="modal-telefono" value="" required>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">correo Electrónico</label>
              <div class="col-sm-10">
                  <input type="email" name="correo_electronico" class="form-control" id="modal-correo_electronico" value="" required>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
              <div class="col-sm-10">
                  <input type="text" name="password" class="form-control" id="modal-password" value="">
              </div>
          </div>
          <!-- Botones de enviar y cancelar -->
          <div class="modal-footer">
              <button type="submit" class="btn btn-secondary">Guardar</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>

<?php
    require "../head/footer.php"
?>

