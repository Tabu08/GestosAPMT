<?php
    require_once "../../../clases/Usuario.php";
    $password = sha1($_POST['password']); //Encripta el valor en la base de datos
    $fechaNaciemiento = explode("-",$_POST['fechaNacimiento']);
    $fechaNaciemiento = $fechaNaciemiento[2] . "-" . $fechaNaciemiento[1] . "-" .$fechaNaciemiento[0];
    $datos = array (
                    "nombre" => $_POST['nombre'],
                    "fechaNacimiento" => $fechaNaciemiento,
                    "email" => $_POST['correo'],
                    "usuario" => $_POST['usuario'],
                    "password" => $password
                );
    $usuario = new Usuario ();
    echo $usuario->agregarUsuario($datos);
    
?>