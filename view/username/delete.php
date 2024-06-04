<!-- Ventana modal para eliminar registro -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
            </div>
            <div class="modal-body text-center">
                <form action="delete.php" method="post" autocomplete="off">
                    <!-- Campos del formulario -->
                    <div class="mb-3 row" id="id-field" style="display: none;">
                        <label for="eliminar-id" class="col-sm-2 col-form-label">Id</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" readonly class="form-control-plaintext" id="eliminar-id" value="">
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="fw-bold">¿Deseas eliminar este registro?.</p>
                    </div>
                    <!-- Botones de enviar y cancelar -->
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary"> Eliminar</button>
                        <button type="button" class="btn btn-danger ms-2" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var deleteModal = document.getElementById('deleteModal');
            
            deleteModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var id = button.getAttribute('data-id');
                console.log(id);
                document.getElementById('eliminar-id').value = id;
            });
        });
    </script>
