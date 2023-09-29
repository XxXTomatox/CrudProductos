<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->create([
        "nombre" => $_POST["nombre"],
        "precio" => $_POST["precio"],
        "fecha_caducidad" => $_POST["fecha_caducidad"],
    ]);
?>