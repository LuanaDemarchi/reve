@extends('layouts.app')
@section('contenido')



<body>
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

                    <input type="text"
                    placeholder="Nombre"
                    class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">

                    <input type="email"
                    placeholder="Correo electrónico"
                    class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">

                </div>

                <input type="text"
                placeholder="Teléfono"
                class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none">

                <select class="w-full p-4 bg-transparent border border-white text-white outline-none">
                    <option class="text-black">Pedido personalizado</option>
                    <option class="text-black">Consulta de precios</option>
                    <option class="text-black">Quejas o sugerencias</option>
                </select>

                <textarea rows="6"
                placeholder="Comentario"
                class="w-full p-4 bg-transparent border border-white text-white placeholder-white outline-none"></textarea>

                <button class="text-white uppercase tracking-[4px] border-b border-white pb-2 hover:opacity-70 transition">
                    Enviar
                </button>

            </form>

        </div>

    </div>

</section>


<section class="w-full bg-[#f8f4ee] py-24">

<div class="max-w-6xl mx-auto px-12 flex justify-start">

<div class="max-w-2xl text-left">

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
<p><strong>Instagram:</strong> @revepatissiere</p>
<p><strong>Horario:</strong> Mar a Dom 09:00 a 20:00</p>
</div>

</div>

</div>

</div>
</section>

</body>
</div>
@endsection