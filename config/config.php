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

?>
