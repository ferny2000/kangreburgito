<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kangreburgito - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-grid img {
    width: 100%;
    height: 200px; /* Ajusta esta altura según lo prefieras */
    object-fit: cover;
}

.product-grid .col-md-4 {
    margin-bottom: 30px;
    display: flex;
    align-items: stretch;
}

.card {
    text-align: center;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 100%;
}

.card-body {
    flex-grow: 1;
}

.btn-orange {
    background-color: #ff6600;
    color: white;
}

.btn-orange:hover {
    background-color: #e65c00;
}

body {
    background-color: #fff7e6;
    color: #333;
}

.navbar,
.footer {
    background-color: #ff6600;
}

.navbar-brand,
.nav-link {
    color: white !important;
}

.carousel-item img {
    width: 100%;
    height: auto;
}

.notification {
    display: none;
    background-color: #4caf50;
    color: white;
    padding: 15px;
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 1000;
    border-radius: 5px;
}

.notification.error {
    background-color: #f44336;
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
                        <a class="nav-link text-white" href="index.php">Regresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="container login-container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <h1 class="text-center mb-4">Iniciar Sesión</h1>
                    <form action="login.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>
                        <button type="submit" class="btn btn-orange w-100">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Kangreburgito. Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
