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
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // Consulta DELETE para eliminar el elemento con el ID proporcionado
    $sql = "DELETE FROM articulos WHERE id = $id";
    
    if (mysqli_query($conn, $sql)) {
       header("Location: home.php");
    } else {
        echo "Error al eliminar el elemento: " . mysqli_error($conn);
    }
}
?>