
@extends('layouts.app')
@section('contenido')
   
   
   <div class="bg-white min-h-screen pt-56 pb-16 px-6 md:px-12 flex justify-center items-center">
        
        <div class="relative w-full max-w-8xl bg-transparent p-10 md:p-16 rounded-[40px] shadow-2xl  mt-10">
            
            <div class="absolute -top-6 -right-6 w-32 h-32 bg-white rounded-full flex items-center justify-center border-4 border-dashed border-white shadow-xl z-20 p-1 transform rotate-12 overflow-hidden transition-all duration-300 ease-in-out hover:scale-110 hover:-rotate-12 hover:shadow-2xl hover:border-white cursor-pointer">
                <img src="{{ asset('imagenes/logo.jpeg') }}" 
                     alt="Logo Pastelería Revé" 
                     class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105">
            </div>
            
            <h1 class="text-4xl md:text-5xl font-extrabold text-[#4e2d2d] mb-10 leading-tight">
                Aviso Legal y<br>Términos de Uso
            </h1>
            
            <p class="text-[#4e2d2d] text-sm mb-12 italic opacity-80">
                Última actualización: {{ date('d/m/Y') }}
            </p>

            <div class="space-y-10 text-[#4e2d2d] leading-relaxed text-lg text-left">
                
                <section>
                    <h2 class="text-2xl font-bold text-[#4e2d2d] mb-4 flex items-center">
                        <span class="bg-amber-100 text-amber-950 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-base">1</span>
                        Información General
                    </h2>
                    <p class="pl-11">
                        Bienvenido a <strong>Pastelería Revé</strong>. Al acceder y utilizar nuestro sitio web, usted acepta cumplir con los términos y condiciones que se detallan a continuación.
                    </p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-[#4e2d2d] mb-4 flex items-center">
                        <span class="bg-amber-100 text-amber-950 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-base">2</span>
                        Privacidad de Datos
                    </h2>
                    <p class="pl-11">
                        Los datos personales solicitados son utilizados exclusivamente para la gestión de pedidos. No compartimos su información con terceros.
                    </p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-[#4e2d2d] mb-4 flex items-center">
                        <span class="bg-amber-100 text-amber-950 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-base">3</span>
                        Compras y Medios de Pago
                    </h2>
                    <p class="pl-11">
                        Aceptamos transferencias bancarias, Mercado Pago y efectivo en el local. Los pedidos se confirman una vez acreditado el pago.
                    </p>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-[#4e2d2d] mb-4 flex items-center">
                        <span class="bg-amber-100 text-amber-950 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-base">4</span>
                        Envíos y Tiempos de Entrega
                    </h2>
                    <div class="pl-11">
                        <ul class="list-disc ml-6 space-y-2 text-[#4e2d2d]">
                            <li><strong>Retiro en local:</strong> Sin costo, coordinando horario previo.</li>
                            <li><strong>Tiempos:</strong> Pedidos personalizados requieren un mínimo de <strong>48 a 72 horas</strong> de anticipación.</li>
                        </ul>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-[#4e2d2d] mb-4 flex items-center">
                        <span class="bg-amber-100 text-amber-950 w-8 h-8 rounded-full flex items-center justify-center mr-3 text-base">5</span>
                        Garantía y Soporte Postventa
                    </h2>
                    <p class="pl-11">
                        Al ser productos perecederos, no se aceptan devoluciones tras la recepción conforme. Ante cualquier inconveniente, comuníquese de inmediato.
                    </p>
                </section>

            </div>

            <div class="mt-16 pt-10 border-t border-[#4e2d2d] text-center">
                <p class="text-[#4e2d2d] font-medium italic mb-8">
                    "Endulzando tus momentos con responsabilidad y amor."
                </p>
                <a href="/" class="inline-block bg-wgite text-[#4e2d2d] font-semibold px-8 py-3 rounded-full hover:bg-white transition shadow-md transform hover:scale-105">
                    Volver al Inicio
                </a>
            </div>
        </div>
    </div>

@endsection
