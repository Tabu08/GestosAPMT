<?php
    require_once "Conexion.php";

    class Gestor extends Conectar {
        public function agregaRegistroArchivo($datos){
            $conexion = Conectar::conexion();
            $sql = "INSERT INTO t_archivos(id_usuario,
                                            id_categoria,
                                            nombre,
                                            tipo,
                                            ruta) 
                                VALUES (?, ?, ?, ?, ?)";
        $query = $conexion->prepare($sql);
        $query->bind_param("iisss", $datos['idUsuario'],
                                    $datos['idCategoria'],
                                    $datos['nombreArchivo'],
                                    $datos['tipo'],
                                    $datos['ruta']);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
        }

        public function obtenNombreArchivo($idArchivo){
            $conexion = Conectar::conexion();
            $sql = "SELECT nombre FROM t_archivos WHERE id_archivo = '$idArchivo'";
            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_array($result)['nombre'];

        }

        public function eliminarRegistroArchivo($idArchivo){
            $conexion = Conectar::conexion();
            $sql = "DELETE FROM t_archivos WHERE id_archivo = ?";
            $query = $conexion->prepare($sql);
            $query->bind_param('i', $idArchivo);
            $respuesta = $query->execute();
            $query->close();
            return $respuesta;
        }
    }
    
?>
