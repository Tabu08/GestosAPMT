<?php
    session_start();
    require_once "../../clases/categorias.php";
    $Categorias = new Categorias();

    echo $Categorias->eliminarCategoria($_POST['idCategoria']);



?>