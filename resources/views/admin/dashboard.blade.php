<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Pastelería Revé</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#2d1b1b] text-white min-h-screen">

    <nav class="bg-[#1e1212] p-6 flex justify-between items-center border-b border-white/10">
        <h1 class="text-2xl font-serif tracking-wider text-yellow-400">Revé Admin Panel</h1>
        <div class="space-x-4">
            <a href="/" class="hover:text-yellow-400 transition">Volver a la Web</a>
            <a href="/logout" class="text-red-400 hover:underline">Cerrar Sesión</a>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <h2 class="text-4xl font-serif mb-8">Bienvenido, {{ auth()->user()->name }} 🛠️</h2>
        <p class="text-gray-300 mb-12">Desde acá podés gestionar los contenidos mínimos exigidos para el proyecto.</p>

        <div class="grid md:grid-cols-3 gap-6">
            
            <div class="bg-[#4e2d2d] p-6 border border-white/10 rounded-lg flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-2">🍰 Catálogo de Productos</h3>
                    <p class="text-gray-300 text-sm mb-4">Alta, baja (lógica) y modificación de tus tortas y pasteles.</p>
                </div>
                <a href="/admin/productos" class="block text-center bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 rounded transition">
                    Gestionar Productos
                </a>
            </div>

            <div class="bg-[#4e2d2d] p-6 border border-white/10 rounded-lg flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-2">👥 Clientes Registrados</h3>
                    <p class="text-gray-300 text-sm mb-4">Visualizar la lista de usuarios que crearon cuenta en el sitio.</p>
                </div>
                <a href="/admin/usuarios" class="block text-center bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-2 rounded transition">
                    Ver Usuarios
                </a>
            </div>

            <div class="bg-[#4e2d2d] p-6 border border-white/10 rounded-lg flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold mb-2">📩 Consultas Recibidas</h3>
                    <p class="text-gray-300 text-sm mb-4">Bandeja de entrada del formulario de contacto que validamos recién.</p>
                </div>
                <a href="#" class="block text-center bg-gray-600 cursor-not-allowed text-white font-bold py-2 rounded">
                    Ver Consultas (Próximamente)
                </a>
            </div>

        </div>
    </main>

</body>
</html>