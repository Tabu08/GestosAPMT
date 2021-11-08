<?php
    session_start();
    if (isset($_SESSION['usuario'])){
        include "header.php";
?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Categorias</h1>
                <!-- Button trigger modal -->
                <div class="row">
                    <div class="col-sm-4">
                        <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregaCategoria">
                            <span class="fas fa-plus-circle">Agregar Nueva Categoria</span>
                        </span>
                    </div>         
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div id="tableCategorias"></div>
                    </div>
                </div>
            </div>
        </div>
      

        <!-- Modal -->
        <div class="modal fade" id="modalAgregaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmCategorias">
                    <label >Nombre de la Categria</label>
                    <input type="text" name="nombreCategoria" id="nombreCategoria" class="form-control">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </div>
            </div>
        </div>
        </div>
      

<?php
        include "footer.php";
?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tableCategorias').load("categorias/tablaCategorias.php");
        });
    </script>
<?php

    } else {
        header("location:../index.php");
    }
?>