<?php

    require_once "Conexion.php";
    class Categorias extends Conectar {
        public function agregarCategoria($datos) {
            $conexion = Conectar::conexion();

            $sql = "INSERT INTO t_categoria (id_usuario,nombre) VALUES (?,?)";

            $query = $conexion->prepare($sql);
            $query->bind_param("is", $datos['idUsuario'], $datos['categoria']);

            $respuesta = $query->execute();
            $query->close();

            return $respuesta;
        }

        public function eliminarCategoria($idCategoria){
            $conexion = Conectar::conexion();

            $sql = "DELETE FROM t_categoria WHERE id_categoria = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i',$idCategoria);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
        public function obtenerCategoria($idCategoria){
            $conexion = Conectar::conexion();

            $sql = "SELECT id_categoria, nombre FROM t_categoria WHERE id_categoria = '$idCategoria'";
            $result = mysqli_query($conexion, $sql);
            $categoria = mysqli_fetch_array($result);
            $datos = array(
                "idCategoria" => $categoria['id_categoria'],
                "nombreCategoria" => $categoria['nombre']
                        );
            return $datos;
        }
        public function actualizarCategoria($datos){
            $conexion = Conectar::conexion();

            $sql = "UPDATE t_categoria SET nombre = ? WHERE id_categoria = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param("si", $datos['categoria'], $datos['idCategoria']);
            
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
    }

?>