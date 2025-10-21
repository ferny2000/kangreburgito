<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kangreburgito</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kangreburgito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Pedidos.php">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ubicacion">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre nosostros.php">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login-kangreburgito.php">Comentarios (solo administradores)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección principal -->
    <header class="text-center py-5">
        <div class="container">
            <img src="img/Logo2.png" alt="Logo Kangreburgito" class="img-fluid logo-img mb-4">
            <h1 class="display-4">¡Bienvenido a Kangreburgito!</h1>
            <p class="lead">Disfruta de nuestros deliciosos antojitos y comida sin esperas. ¡Haz tu pedido en línea y
                pasa a recogerlo!</p>
            <a href="Pedidos.php" class="btn btn-orange btn-lg">Haz tu pedido ahora</a>
        </div>
    </header>

    <!-- Sección secundaria: Carrusel de imágenes -->
    <section id="menu" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros productos</h2>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/alitas.jpg" class="d-block w-100 img-fluid" alt="Comida">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Booneless.jpeg" class="d-block w-100 img-fluid" alt="Postres">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Hamburguesa con papas.jpg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Hamburguesa sencilla.jpeg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Hamburguesa.jpg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                    <div class="carousel-item">
                        <img src="img/HotDog.jpg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Muffins.jpg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                    <div class="carousel-item">
                        <img src="img/nachos.jpg" class="d-block w-100 img-fluid" alt="Antojitos">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Ubicación -->
    <section id="ubicacion" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Nuestra Ubicación</h2>
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462.53294246875436!2d-102.3461366126101!3d21.9628462837132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429e5ffd6d49f89%3A0xcc6fe6238b9c59df!2sNiagara%20205%2C%20Zona%20Centro%2C%2020920%20Jes%C3%BAs%20Mar%C3%ADa%2C%20Ags.!5e0!3m2!1ses!2smx!4v1727478713135!5m2!1ses!2smx" width="100%" height="400" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h3>Contáctanos</h3>
                    <form id="contacto" method="post" action="procesar_comentario.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-orange">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center">
            <p>&copy; 2024 Kangreburgito. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
