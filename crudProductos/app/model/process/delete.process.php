<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->delate(
        $_POST["id"]
    );
?>