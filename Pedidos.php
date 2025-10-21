<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kangreburgito - Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Animaciones */
        .fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        .slideUp {
            animation: slideUp 0.5s ease-out;
        }

        .scaleUp {
            animation: scaleUp 0.5s ease-in-out;
        }

        .scaleUp:hover {
            animation: scaleUpHover 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleUp {
            from {
                transform: scale(0.95);
            }
            to {
                transform: scale(1);
            }
        }

        @keyframes scaleUpHover {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }

        .product-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
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
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-body {
            flex-grow: 1;
        }

        .btn-orange {
            background-color: #ff6600;
            color: white;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-orange:hover {
            background-color: #e65c00;
            transform: scale(1.1);
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

        .modal-dialog {
            animation: slideUp 0.5s ease-out;
        }

    </style>
</head>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kangreburgito</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de productos -->
    <section id="menu" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nuestros productos</h2>
            <div class="row product-grid">
                <!-- Producto Booneless -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/Booneless.jpeg" class="card-img-top" alt="Boonless">
                        <div class="card-body">
                            <h5 class="card-title">Booneless</h5>
                            <p class="card-text">$80</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Booneless', 80)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/alitas.jpg" class="card-img-top" alt="alitas">
                        <div class="card-body">
                            <h5 class="card-tittle">Alitas</h5>
                            <p class="card-text">$80</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Alitas',80)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/Hamburguesa sencilla.jpeg" class="card-img-top" alt="Hamburgesa sencilla">
                        <div class="card-body">
                            <h5 class="card-tittle">Hamburguesa sencilla</h5>
                            <p class="card-text">$45</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Hamburguesa sencilla',45)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/Hamburguesa con papas.jpg" class="card-img-top" alt="Hamburgesa con papas">
                        <div class="card-body">
                            <h5 class="card-tittle">Hamburguesa con papas</h5>
                            <p class="card-text">$70</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Hamburguesa con papas',70)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/Hamburguesa.jpg" class="card-img-top" alt="Hamburgesa con tocino">
                        <div class="card-body">
                            <h5 class="card-tittle">Hamburguesa con tocino</h5>
                            <p class="card-text">$50</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Hamburguesa con tocino',50)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/nachos.jpg" class="card-img-top" alt="Nachos con queso blanco">
                        <div class="card-body">
                            <h5 class="card-tittle">Nachos con queso blanco</h5>
                            <p class="card-text">$40</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Nachos con queso blanco',40)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/Muffins.jpg" class="card-img-top" alt="Muffins">
                        <div class="card-body">
                            <h5 class="card-tittle">Muffins</h5>
                            <p class="card-text">$20</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('Muffin',20)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/HotDog.jpg" class="card-img-top" alt="Hot dogs">
                        <div class="card-body">
                            <h5 class="card-tittle">Hot dog</h5>
                            <p class="card-text">2x$40</p>
                            <button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#pedidoModal" onclick="setProductDetails('orden de hot dogs',40)">Hacer pedido</button>
                        </div>
                    </div>
                </div>
                <!-- Añadir más productos aquí -->
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="pedidoModal" tabindex="-1" aria-labelledby="pedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pedidoModalLabel">Realizar Pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formPedido">
                        <div class="mb-3">
                            <label for="horaPedido" class="form-label">Hora (después de las 4:00 PM)</label>
                            <input type="time" class="form-control" id="horaPedido" required>
                        </div>
                        <div class="mb-3">
                            <label for="cantidadProducto" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidadProducto" required min="1">
                        </div>
                        <button type="button" class="btn btn-orange" id="enviarPedido">Enviar Pedido</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Notificación -->
    <div id="notification" class="notification"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let currentProductName;
        let currentProductPrice;

        function setProductDetails(name, price) {
            currentProductName = name;
            currentProductPrice = price;
        }

        document.getElementById('enviarPedido').addEventListener('click', function() {
            const horaPedido = document.getElementById('horaPedido').value;
            const cantidadProducto = document.getElementById('cantidadProducto').value;

            // Verificar que la hora sea después de las 4:00 PM
            const horaLimite = "16:00";
            if (horaPedido <= horaLimite) {
                alert('Por favor ingresa una hora después de las 4:00 PM.');
                return;
            }

            // Mensaje a enviar
            const mensaje = `Hola, buenas tardes. Me gustaría pedir ${cantidadProducto} ${currentProductName}. Voy a pasar a las ${horaPedido}. Gracias.`;

            // Crear la URL para abrir WhatsApp con el mensaje
            const telefono = "524499404098"; // Número al que se enviará el mensaje
            const urlWhatsApp = `https://api.whatsapp.com/send?phone=${telefono}&text=${encodeURIComponent(mensaje)}`;

            // Abrir WhatsApp con el mensaje predefinido
            window.open(urlWhatsApp, '_blank');

            // Notificación de éxito y cerrar el modal
            alert("Se ha mandado el mensaje exitosamente.");
            $('#pedidoModal').modal('hide');
        });
    </script>

    <!-- Footer -->
    <footer class="footer text-center text-white p-3">
        <p>&copy; 2024 Kangreburgito. Todos los derechos reservados.</p>
    </footer>

</body>

</html>