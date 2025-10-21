<?php
session_start();
require "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar si el correo existe
    $sql = "SELECT * FROM usuarios WHERE Correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $usuario = $result->fetch_assoc();

        // Verificar la contraseña sin encriptación
        if ($contrasena === $usuario['Contrasena']) {
            // Login exitoso
            $_SESSION['usuario'] = $usuario['IDUsuarios'];
            header("Location: comentarios.php"); // Redirigir al index.php
            exit();
        } else {
            // Contraseña incorrecta
            echo "<div class='alert alert-danger text-center'>Contraseña incorrecta</div>";
        }
    } else {
        // Correo no encontrado
        echo "<div class='alert alert-danger text-center'>Correo no registrado</div>";
    }
}
?>
