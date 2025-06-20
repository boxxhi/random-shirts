<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Shirts - Login</title>

    @vite('resources/css/app.css')

</head>
<body class="min-h-svh flex flex-col items-center justify-center bg-gradient-to-br from-blue-200 via-slate-50 to-blue-200 gap-20">

    <h1 class="text-5xl font-bold">Random Shirts</h1>

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <a href="/home" class="hover:underline text-sm text-gray-600">Volver</a>

         @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/cliente_login" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="text" id="email" name="email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">Login</button>
        </form>

        <p class="mt-4 text-sm text-gray-600">¿No tienes cuenta? <a href="/register" class="text-blue-600 hover:underline">Regístrate aquí</a></p>
    </div>


</body>
</html>
