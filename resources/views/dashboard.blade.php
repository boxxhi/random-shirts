<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Usuario</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-6 max-w-4xl">

        <a href="/home" class="hover:underline text-sm text-gray-600">Volver</a>

        <h1 class="text-3xl font-bold text-gray-800 mb-6">Panel de Usuario</h1>

        <p class="text-gray-600 mb-4">Bienvenido, {{ auth()->user()->name }}!</p>
        <!-- Botón de Logout -->
        <div class="mb-6">
            <a href="/logout" class="inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">Cerrar Sesión</a>
        </div>

        <!-- Pestañas -->
        <div class="border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500">
                <li class="mr-2">
                    <button class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 active" data-tab="datos">Datos del Usuario</button>
                </li>
                <li class="mr-2">
                    <button class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="camisas">Camisas</button>
                </li>
                <!--
                <li class="mr-2">
                    <button class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="pedidos">Pedidos</button>
                </li>-->
            </ul>
        </div>

        <!-- Contenido de las pestañas -->
        <div class="tab-content mt-4">
            <!-- Datos del Usuario -->
            <div id="datos" class="tab-pane">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Datos del Usuario</h2>
                @if ($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled>
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mt-2">Usuario</label>
                        <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" disabled>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mt-2">Contraseña (dejar en blanco para no cambiar)</label>
                        <input type="password" name="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="*********" disabled>
                </div>

                <form action="/cliente_address" method="POST" class="space-y-4 mt-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700">Dirección</label>
                        <input type="text" name="address" id="address" value="{{ auth()->user()->address ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded hover:bg-indigo-600 transition">Actualizar Dirección</button>
                </form>
            </div>

            <!-- Camisas -->
            <div id="camisas" class="tab-pane hidden">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Camisas</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left">Imagen</th>
                                <th class="py-2 px-4 border-b text-left">Talla</th>
                                <th class="py-2 px-4 border-b text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shirts as $shirt)
                                <tr>
                                    <td class="py-2 px-4 border-b">
                                        <img src="{{ $shirt->imagen }}" class="w-16 h-16 object-cover">
                                    </td>
                                    <td class="py-2 px-4 border-b">{{ $shirt->talla }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pedidos -->
            <!-- <div id="pedidos" class="tab-pane hidden">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Pedidos</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b text-left">ID Pedido</th>
                                <th class="py-2 px-4 border-b text-left">Camisa</th>
                                <th class="py-2 px-4 border-b text-left">Fecha</th>
                                <th class="py-2 px-4 border-b text-left">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $order->id }}</td>
                                    <td class="py-2 px-4 border-b">{{ $order->shirt->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $order->created_at->format('d/m/Y') }}</td>
                                    <td class="py-22 px-4 border-b">{{ $order->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>-->
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                const tab = button.getAttribute('data-tab');
                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.add('hidden'));
                document.getElementById(tab).classList.remove('hidden');
                document.querySelectorAll('.tab-button').forEach(btn => {
                    btn.classList.remove('border-indigo-500', 'text-gray-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                button.classList.remove('border-transparent', 'text-gray-500');
                button.classList.add('border-indigo-500', 'text-gray-600');
            });
        });
    </script>
</body>
</html>
