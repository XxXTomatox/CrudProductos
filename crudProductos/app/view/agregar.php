<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Crear</h1>
                <div>
                    <a class="btn btn-danger" href="read">Regresar</a>
                </div>
            </div>

            <div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre</div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">precio</label>
                    <input type="text" class="form-control" id="precio" aria-describedby="nombreHelp">
                    <div id="nombreHelp" class="form-text">Ingresa el precio</div>
                </div>
                <div class="mb-3">
                    <label for="fecha_caducidad" class="form-label">fecha caducidad</label>
                    <input type="date" class="form-control" id="fecha_caducidad" aria-describedby="nombreHelp">
                    <div id="nombreHelp" class="form-text">Ingresa el fecha caducidad</div>
                </div>
                <button id="crear" class="btn btn-success">Crear producto</button>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controllers/create.controller.php";
?>