function agregarCategoria(){
    var  categoria = $('#nombreCategoria').val();
    if (categoria == "") {
        swal ("Debes Agregar una Categoria");
        return false; 
    } else {
        $.ajax({
            type:"POST",
            data:"categoria=" + categoria,
            url:"../procesos/categorias/agregarCategoria.php",
            success:function(respuesta){
                respuesta = respuesta.trim();
                if (respuesta == 1) {
                    $('#tableCategorias').load("categorias/tablaCategorias.php");
                    $('#nombreCategoria').val("");
                    swal(":D","Agregado con Exito","success");
                } else {
                    swal (":(","Fallo al Agregar","error");
                }
            }
        });
    }

}

function eliminarCategorias(idCategoria){
    idCategoria = parseInt(idCategoria);
    if(idCategoria < 1) {
        swal("No tienes ingresados Categorias");
        return false;
    } else {
        //******************************************
        swal({
            title: "¿Esta seguro de Elimnar esta Categoria?",
            text: "Una vez Eliminada, no podra recuperarse los arichivos ni la Categoria!!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                  type:"POST", 
                  data:"idCategoria=" + idCategoria,
                  url:"../procesos/categorias/eliminarCategoria.php",
                  success:function(respuesta){
                    respuesta = respuesta.trim();
                    if (respuesta == 1){
                        $('#tableCategorias').load("categorias/tablaCategorias.php");
                        swal ("Eliminado con Exito!", {
                            icon:"success",
                        });
                    } else {
                        swal(":(", "Fallo al Eliminar!", "error");
                    }
                  }
              });
            }
          });
        //*******************************************************/
    }
}
function obtenerDatosCategoria(idCategoria){
    $.ajax({
        type:"POST",
        data:"idCategoria=" + idCategoria,
        url:"../procesos/categorias/obtenerCategoria.php",
        success:function(respuesta){
            respuesta = jQuery.parseJSON(respuesta);
            //console.log (respuesta);
            $('#idCategoria').val(respuesta['idCategoria']);
            $('#categoriaU').val(respuesta['nombreCategoria']);
        }
    })
}

function actualizaCategoria() {
    if ($('#categoriaU').val() == "") {
        swal("No hay Categoria!!");
        return false;
    } else {
        $.ajax({
            type:"POST",
            data:$('#frmActualizaCategoria').serialize(),
            url:"../procesos/categorias/actualizaCategoria.php",
            success:function(respuesta){
                respuesta = respuesta.trim();

                if (respuesta == 1) {
                    $('#tableCategorias').load("categorias/tablaCategorias.php");
                    swal(":D", "Actualizado con Exito!", "success");
                } else {
                    swal(":(", "Fallo la Actualizacion!", "error");
                }
            }
        });
    }
}       