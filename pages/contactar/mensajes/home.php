<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
         <!--Meta tag-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Boomer-LTDA" />
        <meta name="copyright" content="© 2024 Boomer">
        <meta name="application-name" content="Boomer website" />
        <meta name="twitter:image" content="./media/imagenes/LOGO-OS" />
        <meta name="twitter:creator" content="@Boomer App" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Boomer: product site" />
        <meta name="twitter:description" content=""/>
        <meta property="og:url" content="" />
        <meta property="og:image" content="./media/imagenes/LOGO-OS" />
        <meta property="og:description" content="" />
        <meta property="og:title" content="Boomer: product site" />
        <meta property="og:type" content="article" />
        <meta property="og:type" content="website">
        <!--Meta tag-->
        <title>Boomer: product site</title>
         <!--Imagen-->
         <link rel="icon" href="./media/imagenes/LOGO-app.ico">

         <!--Imagen-->
        <!--CSS/index.css-->
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/mobile.css">
        <link rel="stylesheet" media="(max-width: 800px)" href="./css/mobile.css">
        <!--CSS/index.css-->
        <!--Font Awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<!--Font Awesome-->
   </head>
   <body>
    <!--Recargar-->
<div class="loading show" id="recargar">
  <div class="spin"></div>
</div>
 <!--Recargar-->
   <!--NAVEGACION DE PAGINA--> 
   <header>
   <nav class="Navegacion-header-D1">
    <div>
      <label id="TituloPagesD1" class="TituloPagesD1" onclick="recargarPages()">Boomer</label>
    </div>
	  <!-- La navegacion del menu <ul>--> 
     <ul class="Menu-Header-nav-D1">
	  <!--Enlace--><li class="menu-li-page-D1"><a href="#" class="enlace-page-all"><label id="TituloPagesD1EnlaceE1">Inicio</label></a></li>
	  <!--Enlace--><li class="menu-li-page-D1"><a href="#" class="enlace-page-all"><label id="TituloPagesD1EnlaceE2">Productos</label></a></li>
	  <!--Enlace--><li class="menu-li-page-D1"><a href="#" class="enlace-page-all"><label id="TituloPagesD1EnlaceE3">Nosotros</label></a></li>
	  <!--Enlace--><li class="menu-li-page-D1"><a href="#" class="enlace-page-all"><label id="TituloPagesD1EnlaceE4">Contactanos</label></a></li>
     </ul>
   <nav>
   <!--NAVEGACION DE PAGINA-->  
   </header>
<!--SECCIONES DE LOS ARTICULOS--> 

<section class="seccion-de-contenido-articulos-D1" id="Seccion-de-articulos-D1">
<!--Articulo--> 
<section id="publicaciones-post-D1">

<div class="container">
<a href="logout.php" class="titulo-del-form-titulo">Cerrar Seccion</a>
<h1 class="titulo-del-form-titulo">Mensajes</h1>
</div>

 <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect('localhost', 'id20552785_id21780450_id23456789', 'id23456789&T', 'id20552785_id21780450_id23456789');

    // Comprobar errores de conexión
    if (mysqli_connect_errno()) {
        echo "Error en la conexión a MySQL: " . mysqli_connect_error();
    }

    // Obtener los mensajes de la base de datos
    $query = "SELECT * FROM mensajes ORDER BY fecha DESC";
    $result = mysqli_query($conexion, $query);

    // Mostrar los mensajes en pantalla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p class='titulo-del-form-titulo'><strong>" . $row['usuario'] . "</strong>: " . $row['mensaje'] . "</p>";
		echo "<p class='titulo-del-form-titulo'><strong>" . $row['mail'] . "</strong></p>";
        echo "<p class='titulo-del-form-titulo'><small>" . $row['fecha'] . "</small></p>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    ?>

</section>
<!--Articulo--> 
</section> 
<!--SECCIONES DE LOS ARTICULOS-->
 
 
 
<!--PIE DE PAGINA--> 
   <footer class="pie-de-pagina-page-D1">
   <!--PIE DE PAGINA PARTE DE REDES SOCIALES-->
   <div class="pie-de-pagina-page-red-social-D1">
   <!--Enlace Social--><a href="#" class="pie-de-pagina-page-red-social-enlace-D1"><i class="fa fa-facebook" id="pie-de-pagina-page-red-social-enlace-diseño-D1"></i></a>
   <!--Enlace Social--><a href="#" class="pie-de-pagina-page-red-social-enlace-D1"><i class="fa fa-instagram" id="pie-de-pagina-page-red-social-enlace-diseño-D1"></i></a>
   <!--Enlace Social--><a href="#" class="pie-de-pagina-page-red-social-enlace-D1"><i class="fa fa-youtube" id="pie-de-pagina-page-red-social-enlace-diseño-D1"></i></a>
   <!--Enlace Social--><a href="#" class="pie-de-pagina-page-red-social-enlace-D1"><i class="fa fa-twitter" id="pie-de-pagina-page-red-social-enlace-diseño-D1"></i></a>
   </div>
   <!--PIE DE PAGINA OTRA PARTE DE FOOTER-->
   <div class="pie-de-pagina-page-tamaño-footer-D1">
    Boomer-Ltda Copyright &copy <label id="year"></label> Boomer-Ltda - Todos los derechos reservados
   </div>
   </footer>
<!--PIE DE PAGINA--> 

    <!--Script exteriores-->
   <script src="./js/index.js"></script>
   <!--Script exteriores-->  
  <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
	</script>
   </body>
   </html>
