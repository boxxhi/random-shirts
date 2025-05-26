<!-- filepath: resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Random Shirts - Inicio</title>
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
                        <a class="nav-link fw-normal active" href="/home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="/designer">Diseña el tuyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="/contact">Contacto</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="">Crea tu propio estilo!</h2>
            <p class="text-muted">Personaliza tu camisa de la manera que quieras.</p>
        </div>

        <!-- Sección de imágenes destacadas -->
        <div class="row my-4">
            <div class="col-md-4 mb-3">
                <img src="https://manerasdevestir.com/1760-large_default/camiseta-meme-comic.jpg" class="img-fluid rounded" alt="Producto 1">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://img.joomcdn.net/f705a0d50217da4933937768ca46b020fa3f78c7_original.jpeg" class="img-fluid rounded" alt="Producto 2">
            </div>
            <div class="col-md-4 mb-3">
                <img src="https://i.etsystatic.com/17795820/r/il/9e7b4b/1697763879/il_794xN.1697763879_mzqp.jpg" class="img-fluid rounded" alt="Producto 3">
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 mt-auto bg-info">
        <div class="container">
            <small>&copy; {{ date('Y') }} Random Shirts. Todos los derechos reservados.</small>
        </div>
    </footer>
</body>
</html>
