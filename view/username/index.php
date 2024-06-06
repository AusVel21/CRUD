<?php
    require_once __DIR__ . '/../head/head.php';
    require_once __DIR__ . '/../../controller/usernameController.php';
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="container mt-4 text">
    <div class="row">
        <div class="col-md-6">
            <div class="text-start">
                <button 
                    type="button" 
                    class="btn btn-danger" 
                    data-bs-toggle="modal" 
                    data-bs-target="#createModal"
                >
                    Agregar Nuevo Usuario
                </button>
            </div>
        </div>
    </div>


<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table">
                <thead class="table-info">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    <th scope="col">boton de estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($rows): ?>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <td><?= $row[1] ?></td>
                                <td><?= $row[2] ?></td>
                                <td><?= $row[3] ?></td> 
                                <td><?= $row[4] ?></td>
                                <td><?= $row[5] ?></td>
                                <td>
                                    <button 
                                        type="button" 
                                        class="btn btn-dark btn-sm"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#detailsModal"
                                        data-id="<?= $row[0]?>"
                                    >
                                        Ver
                                    </button>
                                    
                                    <button 
                                        type="button" 
                                        class="btn btn-info btn-sm" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#updateModal"
                                        data-id="<?= $row[0]?>"
                                        data-nombre="<?= htmlspecialchars($row[1]) ?>"
                                        data-direccion="<?= htmlspecialchars($row[2]) ?>"
                                        data-correo_electronico="<?= htmlspecialchars($row[4]) ?>"
                                        data-telefono="<?= htmlspecialchars($row[3]) ?>"
                                        data-estado="<?= $row[5] ?>" <!-- Añadimos el atributo de estado -->
                                    
                                        Editar
                                    </button>
                                    
                                    <button
                                        type="button"
                                        class="btn btn-warning btn-sm"
                                        data-id="<?=$row[0]?>"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                    >
                                        Eliminar
                                    </button>
                                    
                                    <button 
                                        type="button" 
                                        class="btn <?= $row[5] == 1 ? 'btn-success' : 'btn-secondary' ?> btn-sm"
                                        onclick="toggleEstado(<?= $row[0] ?>, <?= $row[5] == 1 ? 0 : 1 ?>)"
                                    >
                                        <?= $row[5] == 1 ? 'Activo' : 'Inactivo' ?> <!-- Cambiamos el botón a mostrar el nombre del estado -->
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">No hay registros actualmente</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    require "show.php";
    require "edit.php";
    require "create.php";
    require "delete.php";
    require_once "../head/footer.php";
?>

<!-- JavaScript para actualizar el estado del usuario -->
<script>
    function toggleEstado(id, estado) {
        // Realizar una llamada AJAX a updateEstado.php para cambiar el estado del usuario
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'updateEstado.php?id=' + id + '&estado=' + estado, true);
        xhr.onload = function() {
            if (xhr.status == 200) {
                // Si la solicitud se realizó correctamente, recargar la página
                window.location.reload();
            } else {
                // Si ocurrió un error, mostrar un mensaje de error
                console.error('Error al actualizar el estado del usuario');
            }
        };
        xhr.send();
    }
</script>
