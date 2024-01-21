<!--Creado por: Santiago Vergaño-
    Fecha: 18 de Enero De 2024
   -->
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
<div class="Todo-form-all-formulario">
<div class="container">
<h1 class="titulo-del-form-titulo">Publicar un Articulo</h1>
</div>
<form method="post" action="crear_articulo.php">

<div class="form-group">
    <label for="titulo" class="titulo-del-form-container">Título:</label>
    <input type="text" name="titulo" id="titulo"  class="contenido-del-articulo-Titulo-U" required>
</div>
<div class="form-group">
    <label for="titulo" class="titulo-del-form-container">Autor:</label>
    <input type="text" name="autor" id="autor"  class="contenido-del-articulo-Titulo-U" required>
</div>
<div class="form-group">
    <label for="contenido" class="titulo-del-form-container">Contenido:</label>
    <textarea name="contenido" id="contenido" class="contenido-del-articulo" required></textarea>
</div>
    <input type="submit" value="Crear artículo" class="Btn-enviar">
</form>
</div>
</body>
</html>