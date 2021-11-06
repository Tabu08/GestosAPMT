<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logint</title>
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" text = "text/css" href="librerias/bootstrap4/bootstrap.min.css">
</head>
<body>
    
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="img/apmt.jpg" id="icon" alt="User Icon" />
        <h4>Sistema de Archivos</h4>
      </div>
  
      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Ingresar">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="registro.php">Registrar Usuarios</a><br>
        <a>(solo Administradores)</a>
      </div>
    </div>
</div>
<script src="librerias/sweetalert.min.js"></script>  
</body>
</html>