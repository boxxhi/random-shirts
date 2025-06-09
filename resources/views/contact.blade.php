<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Shirts - Contacto</title>

    @vite('resources/css/app.css')

</head>
<body class="min-h-svh flex flex-col items-center justify-center bg-gradient-to-br from-blue-200 via-slate-50 to-blue-200 gap-15">

    <div class="text-center">
        <h1 class="text-5xl font-bold mb-2">Random Shirts</h1>
        <p>Somos una pagina de camisetas en pleno crecimiento. Agradecemos y tomamos en cuenta tu opinion para continuar mejorarando!</p>
    </div>


    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <a href="/home" class="hover:underline text-sm text-gray-600">Volver</a>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <form action="/sendcontact" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea id="message" name="message" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">Enviar</button>
        </form>
    </div>

</body>
</html>
