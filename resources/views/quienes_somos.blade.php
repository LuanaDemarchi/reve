
@extends('layouts.app')
@section('contenido')

<div class="relative text-black bg-repeat bg-scroll pt-40"
        style="background-image: url('/imagenes/fondo1.jpeg'); background-size: auto;">

    
    <div class="hero-nosotros">
        <div class="overlay-nosotros"></div>
        <h1 class="titulo-hero-nosotros">
            Quienes Somos
        </h1>
        </div>
            <div class="pt-0 pb-12">
        <div class=" mx-auto sm:px-9 lg:px-8">
                
                <section class="historia-editorial">
                <div class="historia-texto">
                    <span class="subtitulo-historia">
                        Nuestro saber hacer
                    </span>
                        <h2>Nuestra Historia</h2>
                        <p>
                            Fundada mediante un emprendimiento donde el primer producto de la marca fueron los Rolls de canela hasta expandirnos a otros postres, Pastelería Revé comenzó como un pequeño taller artesanal. 
                            Hoy, nos dedicamos a transformar ingredientes frescos en experiencias inolvidables, manteniendo siempre el compromiso con el sabor auténtico que nos caracteriza.
                        </p>
                    </div>
                    <div class="historia-imagen">
                        <img src="{{ asset('img/historia.jpg') }}">
                    </div>      
                </section>
                
                   <section class="mision">
                     <div class="mision-texto">
                  <span class="subtitulo-mision">La Créativité</span>
                    <h2>Nuestra Misión</h2>
                        <p>
                         Ofrecer los mejores productos artesanales, expandir la operación comercial mediante la apertura de nuevos canales de venta y distribución, optimizar los procesos productivos para garantizar la calidad constante a gran escala, y fortalecer la identidad de la marca.
                        </p>
                     </div> 
                     <div class="mision-imagen">
                        <img src="{{ asset('img/mision.jpg') }}">
                     </div>
                    </section>

                    <section class="vision">
                     <div class="vision-texto">
                      <span class="subtitulo-vision">Un rêve d’avenir</span>
                    <h2>Nuestra Visión</h2>
                        <p>
                             Posicionarnos como una empresa líder en el sector de repostería premium, reconocida por la excelencia en nuestros productos, la innovación en sabores y diseños, y sobre todo la capacidad de brindar experiencias memorables.
                            </p>
                     </div> 
                     <div class="vision-imagen">
                        <img src="{{ asset('img/vision.jpg') }}">
                     </div>
                    </section>

                <div class="border-t border-amber-200 pt-10">
                    <h2 class="text-black mb-2 titulo-staff">Nuestro Staff</h2>
                    <p class="text-black mb-8">Contamos con información sobre el Staff o equipo que conforman la misma:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-black">
                            <h3 class="font-bold text-lg text-black">Luana Demarchi</h3>
                            <p class="text-brown font-medium text-sm">Chef Ejecutivo</p>
                        </div>

                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-black">
                            <h3 class="font-bold text-lg text-black">Oriana Demarchi</h3>
                            <p class="text-black font-medium text-sm">Repostera</p>
                        </div>

                        <div class="bg-white/60 p-6 rounded-xl text-center shadow-sm border border-black">
                            <h3 class="font-bold text-lg text-black">Maximiliano Barreiro</h3>
                            <p class="text-black font-medium text-sm">Atención al Cliente</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
