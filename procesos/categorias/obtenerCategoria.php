<?php

        require_once "../../clases/categorias.php";
        $Categorias = new Categorias();
         
        echo json_encode($Categorias->obtenerCategoria($_POST['idCategoria']));

?>