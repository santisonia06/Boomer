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
<?php
$servername = "localhost";
$username = "id20552785_id21780450_id23456789";
$password = "id23456789&T";
$dbname = "id20552785_id21780450_id23456789";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
// Realizar la consulta SELECT
$sql = "SELECT * FROM articulos";
$result = mysqli_query($conn, $sql);

// Verificar si hay resultados
if (mysqli_num_rows($result) > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table>";
    echo "<tr><th>ID</th><th>Titulo</th><th>Autor</th><th>Contenido</th><th>Acción</th><th><a href='logout.php' id='article-D1-close'>Cerrar Seccion</a></th></tr>";
    
    // Iterar sobre los resultados
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["titulo"] . "</td>";
		echo "<td>" . $row["autor"] . "</td>";
		echo "<td>" . $row["contenido"] . "</td>";
        echo "<td><a href='delete.php?id=" . $row["id"] . " ' id='delete-article-D1'>Eliminar</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}
?>
</body>
</html>
<style>
table {
	width: 50%;
    padding: 60px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: auto;
    display: inline-table;
    font-size: 20px;
    font-family: 'Play', sans-serif;
    color: #000;
    background-color: #fff;
    letter-spacing: 5px;
    text-align: center;
}
th {
	color: #000;
    right: 30px;
    position: relative;
}
td {
	color: #000;
    right: 30px;
    position: relative;
	line-height: 80px;
}
#delete-article-D1 {
    text-decoration: none;
    background-color: #50b8ffe6;
    padding: 10px;
    border-radius: 15px;
    color: #fff;
}
#article-D1-close {
	text-decoration: none;
	 color: #000;
}
#article-D1-close:hover {
	 color: #000;
text-decoration: underline ; 
transition: all 1s ease-out;
}
#content-element-D1 {
    text-align: center;
    position: relative;
}
body {
  background-color: #141414;
  color: #fff;
  font-size: 20px;
  font-family: 'Play', sans-serif;
}
</style>