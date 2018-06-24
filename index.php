<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="css/login.css">
     <script src="JS/jquery-3.3.1.js" type="text/javascript"></script>  

  </head>
  <body>

    <div class="login-box">
      <img src="img/3.gif" class="avatar" >
      <h1>Bienvenido</h1>
      <form  method="post"  action="Bienvenido.php">
     
        <label >Usuario</label>
        <input type="text" name="nombre" required >
    
        <label  >Password</label>
        <input type="password" name="contra" required>
        <input type="submit" value="Aceptar" >
        <a href="#">Olvidaste tu contraseña</a><br>
        <a href="#">Aun no estas inscrito</a>
   
      </form>
    </div>
  </body>
</html>
