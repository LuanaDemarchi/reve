<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos - Pastelería Revé</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative bg-gray-100 text-gray-800 bg-repeat bg-scroll" style="background-image: url('/imagenes/fondo.jpeg'); background-size: auto;">

    <div class="absolute top-0 left-0 p-6 z-50">
        <a href="{{ url('/') }}" class="block group">
            <div class="relative w-24 h-24 rounded-full overflow-hidden shadow-xl border-4 border-amber-100/70 transition-transform duration-300 group-hover:scale-110 group-hover:rotate-6 bg-white flex items-center justify-center">
                <img src="/imagenes/logo.jpeg" alt="Logo Pastelería Revé" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
            </div>
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-amber-50/90 backdrop-blur-sm overflow-hidden shadow-2xl sm:rounded-2xl p-10 border border-gray-100">
                
                <h1 class="text-4xl font-serif font-bold text-[#4a2c2a] text-center mb-12">¿Quiénes Somos?</h1>
                
                <div class="space-y-8 mb-12">
                    <div class="bg-white/30 p-8 rounded-2xl border border-white/50 shadow-sm">
                        <h2 class="text-2xl font-bold text-amber-900 mb-4">Nuestra Historia</h2>
                        <p class="text-gray-800 leading-relaxed">
                            Fundada mediante un emprendimiento donde el primer producto de la marca fueron los Rolls de canela hasta expandirnos a otros postres, Pastelería Revé comenzó como un pequeño taller artesanal. 
                            Hoy, nos dedicamos a transformar ingredientes frescos en experiencias inolvidables, manteniendo siempre el compromiso con el sabor auténtico que nos caracteriza.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-3 border-b-2 border-amber-200 inline-block">Nuestra Misión</h2>
                            <p class="text-gray-950 leading-relaxed">
                                Ofrecer los mejores productos artesanales, expandir la operación comercial mediante la apertura de nuevos canales de venta y distribución, optimizar los procesos productivos para garantizar la calidad constante a gran escala, y fortalecer la identidad de la marca.
                            </p>
                        </div>

                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-3 border-b-2 border-amber-200 inline-block">Nuestra Visión</h2>
                            <p class="text-gray-950 leading-relaxed">
                                Posicionarnos como una empresa líder en el sector de repostería premium, reconocida por la excelencia en nuestros productos, la innovación en sabores y diseños, y sobre todo la capacidad de brindar experiencias memorables.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="border-t border-amber-200 pt-10">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Nuestro Staff</h2>
                    <p class="text-gray-950 mb-8">Contamos con información sobre el Staff o equipo que conforman la misma:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-amber-100">
                            <h3 class="font-bold text-lg text-amber-900">Luana Demarchi</h3>
                            <p class="text-pink-600 font-medium text-sm">Chef Ejecutivo</p>
                        </div>

                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-amber-100">
                            <h3 class="font-bold text-lg text-amber-900">Oriana Demarchi</h3>
                            <p class="text-pink-600 font-medium text-sm">Repostera</p>
                        </div>

                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-amber-100">
                            <h3 class="font-bold text-lg text-amber-900">Maximiliano Barreiro</h3>
                            <p class="text-pink-600 font-medium text-sm">Atención al Cliente</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-12 border-t border-amber-200 pt-6 text-center">
                    <a href="{{ url('/') }}" class="inline-block bg-[#4a2c2a] text-white px-8 py-2 rounded-full font-semibold hover:bg-amber-900 transition-colors shadow-md">
                        ← Volver al inicio
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>