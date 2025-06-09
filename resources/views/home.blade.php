<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Shirts - Inicio</title>

    @vite('resources/css/app.css')

    <style>

    @keyframes slide {
      0% {
        transform: translateX(0%);
      }
      20% {
        transform: translateX(0%);
      }
      25% {
        transform: translateX(-100%);
      }
      45% {
        transform: translateX(-100%);
      }
      50% {
        transform: translateX(-200%);
      }
      70% {
        transform: translateX(-200%);
      }
      75% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(0%);
      }
    }

    .carousel {
      display: flex;
      animation: slide 12s infinite;
    }

    .carousel-item {
      flex: 0 0 100%;
    }

    </style>
</head>
<body class="min-h-svh">

    <header>
        <nav class="flex flex-col items-center justify-between p-4 ">
            <ul class="flex space-x-4 mt-10 text-lg font-thin ">
                @auth
                <li><a href="/home" class="hover:underline">Inicio</a></li>
                <li><a href="/dashboard" class="hover:underline">Perfil</a></li>
                <li><a href="/logout" class="hover:underline">Logout</a></li>
                <li><a href="/designer" class="hover:underline">Designer</a></li>
                <li><a href="/contact" class="hover:underline">Contacto</a></li>

                @else
                <li><a href="/home" class="hover:underline">Inicio</a></li>
                <li><a href="/login" class="hover:underline">Login</a></li>
                <li><a href="/registro" class="hover:underline">Registro</a></li>
                <li><a href="/contact" class="hover:underline">Contacto</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <main class="h-screen bg-gradient-to-b from-white via-white to-blue-500 flex flex-col items-center gap-2 pt-5">

        <div class="h-50 mt-5">
            <div>

                <h1 class="text-7xl font-bold text-center">
                        Random Shirts
            </h1>

            <p class="mt-1 text-black/65 text-lg text-center">
                Bienvenido a Random Shirts, tu destino para camisetas únicas y aleatorias.
            </p>
            </div>

        </div>


        <div class="overflow-hidden rounded-lg shadow-lg w-90">

        <div class="carousel">

            <div class="carousel-item">
            <img src="{{ asset('images/camisa-1.jpeg') }}" alt="Slide 1" class="w-full h-90 object-cover rounded-md">
            </div>

            <div class="carousel-item">
            <img src="{{ asset('images/camisa-2.jpeg') }}" alt="Slide 2" class="w-full h-90 object-cover rounded-md">
            </div>

            <div class="carousel-item ">
            <img src="{{ asset('images/camisa-3.jpg') }}" alt="Slide 3" class="w-full h-90 object-cover rounded-md">
            </div>
        </div>
        </div>

    </main>

    <footer class="bg-blue-500 text-white text-center p-4">
        <p class="text-sm">© 2025 Random Shirts. Todos los derechos reservados.</p>

</body>
</html>
