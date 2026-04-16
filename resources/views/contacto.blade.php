<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Pastelería Revé</title>
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
            <div class="bg-amber-50/95 backdrop-blur-md overflow-hidden shadow-2xl sm:rounded-3xl p-10 border border-amber-100/50">
                
                <h1 class="text-4xl font-extrabold mb-10 text-amber-900 text-center">Contactate con Nosotros</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold text-amber-800 mb-4 border-b border-amber-200 pb-2">Información de la Empresa</h2>
                            <ul class="space-y-3 text-gray-700">
                                <li><strong class="text-amber-900">Titular:</strong> Maximiliano Barreiro</li>
                                <li><strong class="text-amber-900">Razón Social:</strong> Pastelería Revé S.R.L.</li>
                                <li><strong class="text-amber-900">Domicilio Legal:</strong> Av. 3 de abril 546</li>
                                <li><strong class="text-amber-900">CUIT:</strong> 30-12345678-9</li>
                            </ul>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-amber-800 mb-4 border-b border-amber-200 pb-2">Medios de Contacto</h2>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-center gap-2">
                                    <span>📞</span> <strong>Teléfono:</strong> +54 9 3781 50-9032
                                </li>
                                <li class="flex items-center gap-2">
                                    <span>📧</span> <strong>Email:</strong> RevePasteleria12@.com.ar
                                </li>
                                <li class="flex items-center gap-2">
                                    <span>📸</span> 
                                    <strong>Instagram:</strong> 
                                    <a href="https://www.instagram.com/revepatissiere?igsh=MTM0b2NhdTltM2NkdA==" target="_blank" class="text-amber-700 hover:text-amber-900 hover:underline transition">
                                        @revepatissiere
                                    </a>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span>🕒</span> <strong>Horarios:</strong> Mar a Dom, 09:00 a 20:00
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white/50 p-8 rounded-2xl border border-white shadow-inner">
                        <h2 class="text-2xl font-bold text-amber-900 mb-6 text-center">Envianos un mensaje</h2>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-amber-800 mb-1">Nombre Completo</label>
                                <input type="text" class="w-full p-3 rounded-lg border-amber-200 outline-none shadow-sm focus:ring-2 focus:ring-amber-500" placeholder="Tu nombre...">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-amber-800 mb-1">Correo Electrónico</label>
                                <input type="email" class="w-full p-3 rounded-lg border-amber-200 outline-none shadow-sm focus:ring-2 focus:ring-amber-500" placeholder="ejemplo@correo.com">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-amber-800 mb-1">Motivo de consulta</label>
                                <select class="w-full p-3 rounded-lg border-amber-200 outline-none shadow-sm">
                                    <option>Pedido personalizado</option>
                                    <option>Consulta de precios</option>
                                    <option>Quejas o Sugerencias</option>
                                    <option>Otros</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-amber-800 mb-1">Mensaje</label>
                                <textarea rows="4" class="w-full p-3 rounded-lg border-amber-200 outline-none shadow-sm focus:ring-2 focus:ring-amber-500" placeholder="¿En qué podemos ayudarte?"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-amber-800 text-white font-bold py-3 rounded-lg hover:bg-amber-900 transition duration-300 shadow-md">
                                Enviar Cuestionario
                            </button>
                        </form>
                    </div>
                </div>

                <div class="mt-12 text-center border-t border-amber-200 pt-6">
                    <a href="{{ url('/') }}" class="bg-amber-800/10 text-amber-900 px-6 py-2 rounded-full font-bold hover:bg-amber-800 hover:text-white transition">
                        ← Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>