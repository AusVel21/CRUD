<!-- Modal HTML -->
<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-dark">
                <h5 class="modal-title">Detalles del registro</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-light">Id</th>
                            <td id="record-id"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Nombre</th>
                            <td id="record-nombre"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Dirección</th>
                            <td id="record-direccion"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Teléfono</th>
                            <td id="record-telefono"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Correo Electrónico</th>
                            <td id="record-correo_electronico"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="bg-light">Estado</th>
                            <td id="record-estado"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var detailsModal = document.getElementById('detailsModal');

        detailsModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var recordId = button.getAttribute('data-id');

            fetch('get_record_details.php?id=' + recordId)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('record-id').textContent = data.id;
                    document.getElementById('record-nombre').textContent = data.nombre;
                    document.getElementById('record-direccion').textContent = data.direccion;
                    document.getElementById('record-telefono').textContent = data.telefono;
                    document.getElementById('record-correo_electronico').textContent = data.correo_electronico;
                    document.getElementById('record-estado').textContent = data.estado;
                })
                .catch(error => {
                    console.error('Error al obtener los detalles del registro:', error);
                });
        });
    });
</script>
