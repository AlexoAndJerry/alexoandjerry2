<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
 
		<title>Archivo</title>
<style type="text/css">
	body {
  margin: 0;
  padding: 0;
  background: url(img/4.jpg) no-repeat center top;
  background-size: cover;
  font-family: sans-serif;
  height: 100vh;
}

	/*
si quieres cambiar la imagen y poner un color de fondo
	body{
    background:#3CF;
}*/
nav{
    /*Bordes redondeados*/
    -webkit-border-radius:10px;/*Para chrome y Safari*/
    -moz-border-radius:10px;/*Para Firefox*/
    -o-border-radius:10px;/*Para Opera*/
    border-radius:10px;/*El estandar por defecto*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#FFF), to(#CCC));/*Para chrome y Safari*/
    /*Degradados*/
    background-image: -moz-linear-gradient(top center, #FFF, #CCC);/*Para Firefox*/
    background-image: -o-linear-gradient(top, #FFF, #CCC);/*Para Opera*/
    background-image: linear-gradient(top, #FFF, #CCC);/*El estandar por defecto*/
    overflow:hidden;
    padding:10px;
    width:2000px;
}
	nav ul{
    list-style:none;
    margin:0 10px 0 10px;
    padding:0;
}

nav ul li{
    /*Bordes redondeados*/
    -webkit-border-radius:5px;/*Chrome y Safari*/
    -moz-border-radius:5px;/*Firefox*/
    -o-border-radius:5px;/*Opera*/
    border-radius:5px;/*Estandar por defecto*/
    float:left;
    font-family:Arial, Helvetica, sans-serif;
    font-size:16px;
    font-weight:bold;
    margin-right:10px;
    text-align:center;
    /*Sombras para texto, los mismos parametros que box-shadow*/
    text-shadow: 0px 1px 0px #FFF;
}
nav ul li:hover{
    /*Degradado de fondo*/
    background-image: -webkit-gradient(linear, left top, left bottom, from(#FFF), to( #E3E3E3));/*Chrome y Safari*/
    background-image: -moz-linear-gradient(top center, #FFF, #E3E3E3);/*Firefox*/
    background-image: -o-linear-gradient(top, #FFF, #E3E3E3);/*Opera*/
    background-image: linear-gradient(top, #FFF, #E3E3E3);/*Estandar por defecto*/
    /*Sombras*/
    -webkit-box-shadow:  1px -1px 0px #999;/*Chrome y Safari*/
    -moz-box-shadow:  1px -1px 0px #999;/*Firefox*/
    -o-box-shadow:  1px -1px 0px #999;/*Opera*/
    box-shadow:  1px -1px 0px #999;/*Estandar por defecto*/
    border:1px solid #E3E3E3;
}
nav ul li a{
    color:#999;
    display:block;
    padding:10px;
    text-decoration:none;
    /*Transiciones*/
    -webkit-transition: 0.4s linear all;
    -moz-transition: 0.4s linear all;
    -o-transition: 0.4s linear all;
    transition: 0.4s linear all;
}
nav ul li a:hover {
    color:#000;
}

 
	

	.login-box h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

 

</style>
	</head>
 <body>
	
<?php
//DATOS DE SECION
$db_host="localhost";
$db_nombre="AlexoAndGr";
$db_usuario="root";
$db_contra="27072707";
//DECLARAS LA CONEXION
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

//PETICIONES DEL FORM
$nombre = $_POST['nombre'];//request del value
$contra = $_POST['contra'];
$mensaje = "Incorrecto";

//QUERY
$consulta="select * from tra_usuarios where nom_us='$nombre' AND CONTRA_US='$contra'";
//EJECUTA QUERY
$resultados=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_row($resultados);
//CONDICION SI LA CONSULTA ES IGUAL A NADA ES PORQUE NO TENEMOS
//ESTE REGISTRO EN NUESTRA BASE ENTONCES TE REGRESA
if ($fila==null) {?>
<h1 style="font-style: italic; color:#FFF;"  >USUARIO Y CONTRASEÑA INCORRECTA INTENTANUEVAMENTE O CONTACTA CON EL ADMINISTRADOR</h1>
 <input type="button" value="REGRESAR" onClick="javascript:history.go(-1)" />

<script>
function redireccionarPagina() {
  window.location = "index.php";
}
setTimeout("redireccionarPagina()", 2000);
 </script>




	<?php
}else{  //SI COINCIDE TE DEJA PASAR 
	?> 

<header>
      <h1 style="font-style: italic; color:#FFF;"  >Bienvenido <?php echo $nombre ?></h1>      
    </header>    
   <nav>

<ul>
    <li><a title="AGREGAR USUARIOS" href="Usuarios.php">USUARIOS</a></li>
    <li><a title="AGREGAR MENU USUARIO" href="#">AGREGAR </a></li>
    <li><a title="INFORMACION GENERAL" href="#">INFORMACION </a></li>
    <li><a title="SOLO ADMINISTRADORES" href="#"> ADMINISTRADORES</a></li>
    <li><a title="SALIR" href="index.php">SALIR</a></li>
</ul>
</nav>
    <section style="font-style: italic; color:#FFF;"  >      
      <article>
        <h2>Hola</h2>
        <p>........</p>
        <div>
          <p>...................................</p>
          <img src="img/10.gif" alt="paisaje">          
        </div>
      </article>      
    </section>

   <!-- <footer>
      <h4>DERECHOS RESERVADOS ALEXO  Y GERARDO</h4>
      
    </footer>
-->

<?php

//echo $fila[1];

}


?>

 
  </body>  
</html>
<!--grecendiz-->