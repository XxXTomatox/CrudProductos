<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Actualizar</h1>
                <div>
                    <a class="btn btn-danger" href="read">Regresar</a>
                </div>
            </div>

            <div>
                <input type="text" id="id" value="<?php echo $t_producto["id"]?>" hidden>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="<?php echo $t_producto["nombre"]?>">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre</div>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">precio</label>
                    <input type="text" class="form-control" id="precio" value="<?php echo $t_producto["precio"]?>" aria-describedby="precioHelp">
                    <div id="precioHelp" class="form-text">Ingresa el precio</div>
                </div>
                <div class="mb-3">
                    <label for="fecha_caducidad" class="form-label">fecha caducidad</label>
                    <input type="date" class="form-control" id="fecha_caducidad" value="<?php echo $t_producto["fecha_caducidad"]?>"  aria-describedby="fechaCaducidadHelp">
                    <div id="fecha_caducidadHelp" class="form-text">Ingresa el fecha caducidad</div>
                </div>
                <button id="actualizar" class="btn btn-success">Actualizar producto</button>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controllers/update.controller.php";
?>