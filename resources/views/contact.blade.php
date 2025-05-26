<!-- filepath: resources/views/contacto.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Camisas Random</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="p-3 mb-2">
        <div class="container">
            <nav class="navbar navbar-expand navbar">
                <a class="navbar-brand" href="#">Random Shirts</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="/home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="/designer">Diseña el tuyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal active" href="/contact">Contacto</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container mb-5 w-25 text-center">
        <h2 class="mb-4">¿Quiénes somos?</h2>
        <p>
            En <strong>Random Shirts</strong> nos apasiona la moda y los memes. Somos una tienda dedicada a ofrecer camisas únicas y divertidas para todos los gustos, combinando calidad, estilo y humor en cada producto.
        </p>
        <p>
            Nuestro objetivo es que cada cliente encuentre la Camisa perfecta para expresar su personalidad y disfrutar de la moda de una manera original.
        </p>

        <h2 class="mb-4 mt-5">Contacto</h2>
        <ul class="list-unstyled">
            <li><strong>Correo electrónico:</strong> contacto@tiendaderopa.com</li>
            <li><strong>Teléfono:</strong> +503 xxxx xxxx</li>
            <li><strong>Dirección:</strong> Calle xxxxxxxx, Ciudad de San Miguel, El salvador</li>
        </ul>
        <p>¡No dudes en escribirnos para cualquier duda, sugerencia o comentario!</p>
    </main>

    <!-- Footer -->
    <footer class="bg-info text-center py-3 mt-auto">
        <div class="container">
            <small>&copy; {{ date('Y') }} Camisas Random. Todos los derechos reservados.</small>
        </div>
    </footer>
</body>
</html>
