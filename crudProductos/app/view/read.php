<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="agregar">Agregar</a>
            <a class="btn btn-success" href="pedidos">pedidos</a>
            <a class="btn btn-danger" href="home">cerrar sesion</a>
            <hr>

        <div class="table-responsive">
 
            <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <tr>
                    <th>Nombre</th>
                    <th>precio</th>
                    <th>fecha caducidad</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                    <th>Realisar pedido</th>
                </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        foreach ($t_producto as $t_producto):
                        ?>
                    <tr>
                        <td hidden id="id"><?php echo $t_producto['id']?> </td>
                        <td><?php echo $t_producto["nombre"]?></td>
                        <td><?php echo $t_producto["precio"]?></td>
                        <td><?php echo $t_producto["fecha_caducidad"]?></td>
                    <td>
                        <a class="btn btn-warning" href="./update&id=<?php echo $t_producto["id"] ?>" >Actualizar</a>
                    </td>
                    <td>
                        <button onclick="eliminar(<?php echo $t_producto['id'] ?>)" class="btn btn-danger">Eliminar</button>
                    </td>
                    <td>
                        <button noclick="" class="btn btn-success">crear pedido</button>
                    </td>
                    </tr>
                    <input type="text" id="id" hidden >
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                    <tfoot>   
                    </tfoot>
            </table>
        </div>
        
        </div>
        <div class="col mt-4">
            
        </div>
    </div>
</div>
<?php 
    require "./app/controllers/delete.controller.php";
?>