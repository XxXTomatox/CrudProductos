<div class="container">
    <div class="row">
        <div class="col mt-4">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombres" aria-describedby="nombreHelp">
                    <div id="nombresHelp" class="form-text">Ingresa el nombre</div>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">apellido</label>
                    <input type="text" class="form-control" id="apellidos" aria-describedby="apellidosHelp">
                    <div id="apellidosHelp" class="form-text">Ingresa los apellidos</div>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="usuarios" aria-describedby="usuariosHelp">
                    <div id="usuariosHelp" class="form-text">Ingresa el nombre de usuario</div>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">crea una cointraseña</label>
                    <input type="text" class="form-control" id="Pass" aria-describedby="PassHelp">
                    <div id="PassHelp" class="form-text">Ingresa la contraseña</div>
                </div>
                <button id="createUser" class="btn btn-success">Crear usuario</button>
                <a id="Reguistro" class="btn btn-success" href="home">Regresar</a>
            </form>
        </div>
    </div>
</div>
<?php 
    require "./app/controllers/createUser.controller.php";
?>