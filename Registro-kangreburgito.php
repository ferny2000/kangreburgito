<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Kangreburgito</title>
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
            <a class="navbar-brand" href="#">Kangreburgito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="comentarios.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h3 class="text-center mb-4">Registro</h3>
                    <form action="registro.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>
                        <button type="submit" class="btn btn-orange w-100">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>