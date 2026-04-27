@extends('layouts.app')
@section('contenido')

<div class="hero-informacion">
    <div class="overlay-informacion"></div>
    <h1 class="titulo-hero-informacion">Información</h1>
</div>

<section class="informacion-reve" style="background-color: #f8f4ee; padding: 80px 10%; display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

    <div style="display: flex; flex-direction: column; gap: 80px;">
        
        <div>
            <span style="letter-spacing: 0.3em; text-transform: uppercase; font-size: 0.8rem; opacity: 0.7; color: #4e2d2d;">Servicios</span>
            <h2 style="font-size: 4rem; font-family: serif; color: #4e2d2d; margin: 10px 0;">Entrega</h2>
            <p style="max-width: 400px; line-height: 1.6; color: #4e2d2d; opacity: 0.8;">
                Coordinamos entregas a domicilio, medios de pago y la gestión de tus pedidos personalizados de forma artesanal.
            </p>
        </div>

        <div style="border-top: 1px solid rgba(78, 45, 45, 0.1); padding-top: 40px;">
            <h2 style="font-size: 4rem; font-family: serif; color: #4e2d2d; margin-bottom: 20px;">Logística</h2>
            <ul style="list-style: none; padding: 0; font-size: 1.2rem; color: #4e2d2d; line-height: 2;">
                <li>— Delivery propio</li>
                <li>— Pedidos personalizados</li>
            </ul>
        </div>

        <div style="border-top: 1px solid rgba(78, 45, 45, 0.1); padding-top: 40px;">
            <h2 style="font-size: 4rem; font-family: serif; color: #4e2d2d; margin-bottom: 20px;">Medios de Pago</h2>
            <ul style="list-style: none; padding: 0; font-size: 1.2rem; color: #4e2d2d; line-height: 2.5;">
                
                <li><span style="margin-right: 10px;">💸</span> ○ Efectivo ($)</li>
                
                <li onclick="toggleData('mp-data')" style="cursor: pointer; transition: 0.3s; display: flex; align-items: center;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">
                    <img src="{{ asset('imagenes/logo-mercado-pago.png') }}" alt="MP" style="height: 20px; width: auto; margin-right: 10px;"> 
                    ○ Mercado Pago <small style="font-size: 0.7rem; opacity: 0.5; margin-left: 5px;">(Ver datos)</small>
                </li>
                <div id="mp-data" style="display: none; background: rgba(0, 158, 227, 0.05); padding: 15px; border-radius: 4px; margin: 10px 0; font-size: 1rem; border-left: 4px solid #009ee3;">
                    <strong>Alias:</strong> reve.pasteleria.mp<br>
                    <strong>Titular:</strong> Maximiliano Barreiro
                </div>

                <li onclick="toggleData('bank-data')" style="cursor: pointer; transition: 0.3s; display: flex; align-items: center;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">
                    <span style="margin-right: 10px;">💳</span> ○ Transferencia ($) <small style="font-size: 0.7rem; opacity: 0.5; margin-left: 5px;">(Ver datos)</small>
                </li>
                <div id="bank-data" style="display: none; background: rgba(78, 45, 45, 0.05); padding: 15px; border-radius: 4px; margin: 10px 0; font-size: 1rem; border-left: 3px solid #4e2d2d;">
                    <strong>CBU:</strong> 0000003100012345678901<br>
                    <strong>Alias:</strong> reve.bakery.corrientes<br>
                    <strong>Banco:</strong> Banco de Corrientes
                </div>
            </ul>
        </div>
    </div>

    <div style="display: flex; justify-content: flex-end; position: sticky; top: 20px;">
        <img src="{{ asset('img/entrega.jpg') }}" style="width: 380px; height: auto; border-radius: 4px; box-shadow: 10px 10px 30px rgba(0,0,0,0.05);">
    </div>

</section>

<section class="mapa-editorial">
    <div class="overlay-mapa"></div>
    <div class="mapa-contenido">
        <h2>Visitanos</h2>
        <a href="https://www.google.com/maps/place/Av.+3+de+Abril+546,+W3410JXS+Corrientes/@-27.4750912,-58.8466006,17z/data=!4m6!3m5!1s0x94456cbdf144731f:0xd69e6a162e4d0d62!8m2!3d-27.4750103!4d-58.8451307!16s%2Fg%2F11j32tmfdx?entry=ttu&g_ep=EgoyMDI2MDQyMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn-mapa">Ver ubicación</a>
    </div>
</section>

<script>
function toggleData(id) {
    var element = document.getElementById(id);
    if (element.style.display === "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
</script>

@endsection