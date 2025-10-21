<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff7e6;
            color: #333;
            padding-bottom: 60px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar,
        .footer {
            background-color: #ff6600;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .btn-orange {
            background-color: #ff6600;
            color: white;
        }

        .btn-orange:hover {
            background-color: #e65c00;
        }

        .carousel-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /*logo de la empresa */
        .logo-img {
            width: 50px;
            height: auto;
        }

        .content {
            margin: 40px;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff6600;
            text-align: center;
            margin-bottom: 30px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            text-align: justify;
        }

        .content strong {
            color: #e65c00;
        }

        /* Footer fijo en la parte inferior */
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 100;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/Logo2.png" alt="Logo Kangreburgito" class="logo-img">
                Kangreburgito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Pedidos.php">Pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Historia -->
    <div class="content">
        <h1>Sobre Nosotros</h1>
        <p>
            En 2022, dos jóvenes, una pareja unida no solo por su amor, sino también por su pasión por la comida, decidieron aventurarse en el mundo del emprendimiento. A pesar de estar inmersos en sus estudios, no dejaron que los obstáculos les impidieran seguir sus sueños. Con apenas un par de recetas y un pequeño horno, comenzaron a vender hamburguesas y antojitos desde su casa. Fue así como nació <strong>Kangreburgito</strong>.
        </p>
        <p>
            Al principio, el negocio era pequeño. Pasaban largas horas entre clases, tareas y cocinando juntos para poder atender a sus primeros clientes. No fue fácil, pero con dedicación, trabajo en equipo y el apoyo mutuo que se brindaban como pareja, lograron ganarse la lealtad de la comunidad local. Sus hamburguesas se hicieron famosas por su sabor único y sus ingredientes frescos.
        </p>
        <p>
            A lo largo del tiempo, han seguido innovando y aprendiendo, siempre adaptándose a los retos que enfrentan como estudiantes y emprendedores. Hoy en día, aunque el negocio ha crecido, siguen manteniendo los valores con los que comenzaron: calidad, buen servicio y, sobre todo, el amor por lo que hacen y por lo que han construido juntos.
        </p>
        <p>
            Mientras continúan con sus estudios, <strong>Kangreburgito</strong> sigue siendo un símbolo de esfuerzo, dedicación y el sueño compartido de construir algo propio. Para ellos, no hay mejor satisfacción que ver a sus clientes felices con cada bocado, sabiendo que su pasión como pareja está reflejada en cada plato.
        </p>
    </div>

    <!-- Footer fijo -->

    <footer class="footer text-center text-white p-3">
        <center>
            <p>&copy; 2024 Kangreburgito. Todos los derechos reservados.</p>
        </center>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>