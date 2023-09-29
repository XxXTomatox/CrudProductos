<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a class="btn btn-danger" href="read">regresar</a>
            <hr>

            <div class="table-responsive">
 
            <table class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                <tr>
                    <th>producto</th>
                    <th>cantidad</th>
                    <th>total</th>
                </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        foreach ($t_pedido as $t_pedido):
                        ?>
                    <tr>
                        <td hidden id="id"><?php echo $t_pedido['id']?> </td>
                        <td><?php echo $t_pedido["nombre"]?></td>
                        <td><?php echo $t_pedido["precio"]?></td>
                        <td><?php echo $t_pedido["fecha_caducidad"]?></td>
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
    </div>
</div>