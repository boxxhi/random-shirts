<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <p class="mt-4 text-sm text-gray-600">Diseña tu propia camiseta aquí:</p>
    </div>
    <iframe class="overflow-hidden" scrolling="no" src="frames/idesigner.html" height="500" width="1000"></iframe>

</body>
</html>
