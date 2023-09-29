<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/view/includes/metatags.php"
    ?>
</head>
<body>
    
    <?php 
        require "./app/model/crud.class.php";
        $crud = new Crud();
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/view/login.php";
                    break;
                case 'read':
                    $t_producto = $crud->read();
                    include "./app/view/read.php";
                    break;
                case 'pedidos':
                    include "./app/view/pedidos.php";
                    break;
                case 'update':
                    $t_producto = $crud->show($_REQUEST["id"]);
                    include "./app/view/update.php";
                    break;
                case 'reguistro':
                    include "./app/view/reguistro.php";
                    break;
                case 'agregar':
                    include "./app/view/agregar.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        } else {
            header("location: ./home");
        }
    ?>

    <?php 
        require "./app/view/includes/scripts.php"
    ?>
</body>
</html>