<?php
    session_start();
    if (isset($_SESSION['usuario'])){
        include "header.php";
        require_once "../clases/Conexion.php";
        $c = new Conectar();
                $conexion = $c->conexion();
                $idUsuario = $_SESSION['idUsuario'];
                $sql = "SELECT 
                            archivos.id_archivo as idArchivo,
                            usuario.nombre as nombreUsuario,
                            categorias.nombre as categoria,
                            archivos.nombre as nombreArchivo,
                            archivos.tipo as tipoArchivo,
                            archivos.ruta as rutaArchivo,
                            archivos.fecha as fecha
                        FROM
                            t_archivos AS archivos
                                INNER JOIN
                            t_usuarios AS usuario ON archivos.id_usuario = usuario.id_usuario
                                INNER JOIN
                            t_categoria AS categorias ON archivos.id_categoria = categorias.id_categoria";
                        
                $result = mysqli_query($conexion, $sql);
?>
        <div class="container" >
            <div class="row" >
                <div class = "col-sm-12">
                    <div class="jumbotron jumbotron-fluid" >
                        <div class="container">
                            <h3 class="display-10">Almacen de Archivos Digitales de la APMT</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-hover table-dark" id="tablaGestorDataTable">
                                    <thead>
                                        <tr style = "text-align: center;">
                                            <th>Nombre de Archivo Digital</th>
                                            <th>Fecha</th>
                                            <th>Descargar</th>
                                            <th>Categoria</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        while($mostrar = mysqli_fetch_array($result)) {
                                            $rutaDescarga = "../archivos/".$idUsuario."/".$mostrar['nombreArchivo'];
                                            $nombreArchivo = $mostrar['nombreArchivo'];
                                            $idArchivo = $mostrar['idArchivo'];
                                            
                                    ?>
                                        <tr>
                                            <td><?php echo $mostrar['nombreArchivo']; ?></td>
                                            <td><?php echo $mostrar['fecha']; ?></td>
                                            <td>
                                                <a href="<?php echo $rutaDescarga; ?>" download="<?php echo $nombreArchivo;?>">
                                                <span  class="fas fa-download">Download</span> 
                                                </a>
                                            </td>
                                            <td><?php echo $mostrar['categoria']; ?></td>                        
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include "footer.php";
    } else {
      header("location:../index.php");
    }
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestorDataTable').DataTable();
    });
</script>