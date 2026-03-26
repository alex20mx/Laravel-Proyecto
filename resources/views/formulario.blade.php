<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full bg-white shadow-xl rounded-2xl p-8">

        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Formulario de usuario
        </h1>

        <form method="POST" action="/procesar">
            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Nombre:
                </label>
                <input 
                    type="text" 
                    name="nombre"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                >
            </div>

            <!-- Edad -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Edad:
                </label>
                <input 
                    type="number" 
                    name="edad"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                >
            </div>

            <!-- Botón -->
            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition"
            >
                Enviar
            </button>

        </form>

    </div>

</body>
</html>