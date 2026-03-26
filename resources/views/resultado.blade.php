<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl text-center">

        <h1 class="text-2xl font-bold text-gray-800 mb-4">
            {{ $mensaje }}
        </h1>

        <a href="/" class="text-blue-600 hover:underline">
            Volver
        </a>

    </div>

</body>
</html>