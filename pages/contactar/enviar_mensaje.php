<?php
// Conexión a la base de datos (reemplazar los datos de conexión por los correctos)
$conexion = mysqli_connect('localhost', 'id20552785_id21780450_id23456789', 'id23456789&T', 'id20552785_id21780450_id23456789');

// Comprobar errores de conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a MySQL: " . mysqli_connect_error();
}

// Obtener los datos del formulario
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$mensaje = mysqli_real_escape_string($conexion, $_POST['mensaje']);
$mail = mysqli_real_escape_string($conexion, $_POST['mail']);

// Insertar el mensaje en la base de datos
$query = "INSERT INTO mensajes (usuario, mensaje, mail) VALUES ('$usuario', '$mensaje', '$mail')";
$result = mysqli_query($conexion, $query);

// Comprobar si hubo algún error en la consulta
if (!$result) {
    echo "Error al enviar el mensaje: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redirigir al index.php
header("Location: index.php");
?>