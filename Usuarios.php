<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
 
		<title>Archivo</title>

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
setTimeout("redireccionarPagina()", 3000);
 </script>




	<?php
}else{  //SI COINCIDE TE DEJA PASAR 
	?> 

<header>
      <h1 style="font-style: italic; color:#FFF;"  >Bienvenido <?php echo $nombre ?></h1>      
    </header>    
   <nav>

<ul>
    <li><a title="AGREGAR USUARIOS" href="#">USUARIOS</a></li>
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