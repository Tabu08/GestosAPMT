function agregarArchivosGestor() {
    //Objeto de Java script que permite enviar archivos
    var formData = new FormData(document.getElementById('frmArchivos'));
    $.ajax({
      url:"../procesos/gestor/guardarArchivos.php",
      type:"POST",
      datatype:"html",
      data: formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(respuesta){
          console.log(respuesta);
          respuesta = respuesta.trim();

          if(respuesta == 1) {
              $('#frmArchivos')[0].reset();
              $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
              swal(":D", "Agregado con Exito!","success");
          } else {
              swal(":(", "Fallo al Agregar!","error");
          }
      }
    }); 
}

function eliminarArchivo(idArchivo){
    swal({
        title: "Esta seguro de Eliminar el Archivo?",
        text: "Una vez eliminado, no podra recuperarlo!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
              type:"POST",
              data:"idArchivo=" + idArchivo,
              url:"../procesos/gestor/eliminaArchivo.php",
              success:function(respuesta){
                  
                respuesta = respuesta.trim();
                if (respuesta == 1){
                    $('#configform')[0].reset();
                    $('#tablaGestorArchivos').load("gestor/tablaGestor.php");
                    swal("Eliminado con Exito!", {
                        icon: "success",
                  });
                } else {
                    swal("Error al Eliminar!", {
                        icon: "error",
                    });
                }
              }
          });
        } 
      });
}