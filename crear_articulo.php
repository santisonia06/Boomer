<?php

require_once __DIR__ . '/config/config.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO articulos (titulo, autor, contenido) VALUES ('$titulo', '$autor', '$contenido')";

if ($conn->query($sql) === TRUE) {
	header("Location: post-article.php");
} else {
    echo "Error al crear el artículo: " . $conn->error;
}

$conn->close();
?>