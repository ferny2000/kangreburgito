<?php
require "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Verificar si el correo ya está registrado
    $sql = "SELECT * FROM usuarios WHERE Correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='alert alert-danger text-center'>El correo ya está registrado</div>";
    } else {
        // Insertar nuevo usuario sin encriptar la contraseña
        $sql = "INSERT INTO usuarios (Correo, Contrasena) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $correo, $contrasena);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success text-center'>Registro exitoso</div>";
            header("Location: comentarios.php");
            exit();
        } else {
            echo "<div class='alert alert-danger text-center'>Error en el registro</div>";
        }
    }
}
?>
