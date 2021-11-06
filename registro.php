    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Resgistrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <link rel="stylesheet" text = "text/css" href="librerias/bootstrap4/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Registro de Usuario</h1>
            <hr>
            <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                   <form id="frmRegistro" method="post" onsubmit="return agregarUsuarioNuevo()">
                        <label>Nombre de Usuario</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required="">
                        <label>Fecha de Nacimiento</label>
                        <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required="">
                        <label>Email o correo</label>
                        <input type="text" name="correo" id="correo" class="form-control" required="">
                        <label>Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" required="">
                        <label>Password o Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required=""><br>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <button class="btn btn-primary">Registrar</button>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="index.php" class="btn btn-success"> Login</a>
                            </div>
                        </div>
                    </form>
               </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    <script src="librerias/jquery-3.6.0.min.js"></script>
    <script src="librerias/sweetalert.min.js"></script>    

    <script type= "text/javascript">
        function agregarUsuarioNuevo(){
            $.ajax({
                method: "POST",
                data: $('#frmRegistro').serialize(),
                url: "procesos/usuario/registro/agregarUsuario.php",
                success:function(respuesta){
                    respuesta = respuesta.trim();

                    if (respuesta == 1){
                        swal(":D","Agree con Exito","success");
                    }else{
                        swal(":(","Agree Error","Error");
                    }
                }
            });

            return false;

        }
    </script>
</body>
</html>