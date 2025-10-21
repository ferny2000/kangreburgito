<?php
session_start(); // Iniciar sesión para usar mensajes de éxito o error
require 'Conexion.php'; // Incluir el archivo de conexión a la base de datos

// Verificar si el formulario ha sido enviado correctamente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si todos los campos están definidos y no están vacíos
    if (isset($_POST['nombre'], $_POST['email'], $_POST['comentario']) &&
        !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['comentario'])) {

        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $comentario = $_POST['comentario'];

        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO buzon (Nombre, Correo, Mensaje) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $email, $comentario);

        // Ejecutar la consulta y manejar el resultado
        if ($stmt->execute()) {
            $_SESSION['mensaje'] = "Gracias por tu comentario. Se ha enviado correctamente.";
        } else {
            $_SESSION['mensaje'] = "Error al enviar el comentario: " . $stmt->error;
        }

        // Cerrar el statement y la conexión
        $stmt->close();
        $conn->close();
    } else {
        $_SESSION['mensaje'] = "Por favor, completa todos los campos del formulario.";
    }

    // Redirigir al formulario o a una página de agradecimiento
    header("Location: index.php"); // Cambia "index.php" por la página donde quieras mostrar el mensaje
    exit();
}
?>
