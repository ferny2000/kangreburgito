<?php
$mensaje = ""; // Variable para almacenar el mensaje
require 'Conexion.php';
// Si el formulario de eliminar fue enviado
if (isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM buzon WHERE IDBuzon = $id";
    if ($conn->query($sql) === TRUE) {
        $mensaje = "Comentario eliminado correctamente.";
    } else {
        $mensaje = "Error al eliminar comentario: " . $conn->error;
    }
}

// Obtener todos los comentarios de la tabla buzon
$sql = "SELECT * FROM buzon";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - Kangreburgito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Animaciones */

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                transform: translateY(30px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideLeft {
            0% {
                transform: translateX(-30px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes scaleUp {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        body {
            background-color: #fff7e6;
            color: #333;
            animation: fadeIn 1s ease-in-out;
        }

        .navbar {
            background-color: #ff6600;
            animation: fadeIn 2s ease-in-out;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link {
            animation: slideLeft 0.5s ease-out;
        }

        .footer {
            background-color: #ff6600;
            animation: fadeIn 3s ease-in-out;
        }

        .btn-orange {
            background-color: #ff6600;
            color: white;
            animation: scaleUp 0.5s ease-out;
        }

        .btn-orange:hover {
            background-color: #e65c00;
        }

        .carousel-item {
            height: 400px;
            animation: fadeIn 2s ease-in-out;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-inner {
            max-width: 100%;
            overflow: hidden;
        }

        .logo-img {
            width: 200px;
            height: auto;
            animation: slideUp 1s ease-out;
        }

        h1,
        p {
            animation: slideUp 1s ease-out;
        }

        #menu {
            animation: fadeIn 1s ease-in-out;
        }

        #ubicacion {
            animation: slideUp 1s ease-out;
        }

        #contacto {
            animation: fadeIn 1.5s ease-in-out;
        }

        footer p {
            animation: slideUp 2s ease-out;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kangreburgito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Notificación flotante -->
    <?php if ($mensaje): ?>
        <div class="alert alert-success alert-flotante">
            <?php echo $mensaje; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Comentarios de los Usuarios</h2>

        <table class="table table-hover">
            <thead class="table-warning">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Mensaje</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['IDBuzon']; ?></td>
                        <td><?php echo $row['Nombre']; ?></td>
                        <td><?php echo $row['Correo']; ?></td>
                        <td><?php echo $row['Mensaje']; ?></td>
                        <td>
                            <form method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?php echo $row['IDBuzon']; ?>">
                                <button type="submit" name="eliminar" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<center>
    <footer>
        <!-- Enlace para registrar otro usuario -->
        <div class="registrar-usuario">
            <p>¿Quieres registrar otro usuario? <a href="Registro-kangreburgito.php" class="btn btn-orange">Registrar ahora</a></p>
        </div>
    </footer>
</center>
</html>