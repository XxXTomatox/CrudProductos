<?php 
    require "../crud.class.php";
    $crud = new Crud();

    $crud->createUser([
        "nombres" => $_POST["nombres"],
        "apellidos" => $_POST["apellidos"],
        "usuarios" => $_POST["usuarios"],
        "pass" => $_POST["pass"],
    ]);
?>