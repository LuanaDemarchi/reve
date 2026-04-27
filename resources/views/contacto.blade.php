@extends('layouts.app')
@section('contenido')

<div class="bg-[#f8f4ee]">
    <section class="w-full min-h-screen flex flex-col md:flex-row pt-40">
        <div class="md:w-1/2 min-h-screen">
            <img src="{{ asset('img/fondoContacto.jpg') }}"
                 class="w-full h-full object-cover"
                 alt="Contacto ReVé">
        </div>

        <div class="md:w-1/2 min-h-screen bg-[#4e2d2d] flex items-center px-12 py-20">
            <div class="w-full max-w-xl mx-auto">
                <h1 class="text-5xl text-white font-serif mb-10 tracking-wider">
                    Contactanos
                </h1>

                <form class="space-y-5">
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Nombre" class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">
                        <input type="email" placeholder="Correo electrónico" class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">
                    </div>

                    <input type="text" placeholder="Teléfono" class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">

                    <select class="w-full p-4 bg-transparent border border-white text-white outline-none">
                        <option class="text-black">Pedido personalizado</option>
                        <option class="text-black">Consulta de precios</option>
                        <option class="text-black">Quejas o sugerencias</option>
                    </select>

                    <textarea rows="6" placeholder="Comentario" class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none"></textarea>

                    <button class="text-white uppercase tracking-[4px] border-b border-white pb-2 hover:opacity-70 transition">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="w-full bg-[#f8f4ee] py-24">
        <div class="max-w-6xl mx-auto px-12 flex flex-col md:flex-row gap-16">
            
            <div class="md:w-1/2 text-left">
                <h2 class="text-5xl font-serif mb-12 text-[#4e2d2d]">
                    Información de la Empresa
                </h2>

                <div class="space-y-8 text-lg text-[#4e2d2d]">
                    <div>
                        <p><strong>Titulares:</strong> Maximiliano Barreiro y Demarchi Luana</p>
                        <p><strong>Razón Social:</strong> Pastelería Revé S.R.L.</p>
                        <p><strong>Domicilio Legal:</strong> Av. 3 de Abril 546</p>
                        <p><strong>CUIT:</strong> 30-12345678-9</p>
                    </div>

                   <div>
                 <p><strong>Teléfono:</strong> +54 9 3781 50-9032</p>
                <p><strong>Email:</strong> revepasteleria12@.com.ar</p>
               <p>
               <strong>Instagram:</strong> 
                 <a href="https://www.instagram.com/revepatissiere?igsh=MTM0b2NhdTltM2NkdA==" 
                    target="_blank" 
                    class="hover:underline hover:opacity-80 transition-all">
                @revepatissiere
               </a>
                </p>
                 <p><strong>Horario:</strong> Mar a Dom 09:00 a 20:00</p>
                   </div>
                  </div>
                    </div>

            <div class="md:w-1/2 w-full h-[450px]">
                <iframe 
                    width="100%" 
                    height="100%" 
                    style="border:0; border-radius: 4px; filter: grayscale(0.2);" 
                    loading="lazy" 
                    allowfullscreen 
                    referrerpolicy="no-referrer-when-downgrade" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.11978252251!2d-58.8315152!3d-27.4655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456ca0df26901f%3A0x6333580556f081!2sAv.%203%20de%20Abril%20546%2C%20W3400%20Corrientes!5e0!3m2!1ses-419!2sar!4v1714100000000">
                </iframe>
            </div>

        </div>
    </section>
</div>

@endsection