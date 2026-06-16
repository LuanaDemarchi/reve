<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescripcionesSeeder extends Seeder
{
    public function run(): void
    {
        $descripciones = [
            // ROLLS
            'Clasico'        => 'Roll suave de canela.',
            'Creamchesse'    => 'Roll de canela con cobertura de creamcheese.',
            'Dulce de leche' => 'Roll de canela con cobertura de dulce de leche.',
            'Chocotorta'     => 'Roll de canela con dulce de leche y chocolina.',
            'Oreo'           => 'Roll de canela con creamcheese y oreo.',
            'Frutos Rojos'   => 'Roll de canela con cobertura de frutos rojos.',

            // COOKIES
            'Clasica'           => 'Cookie con chips de chocolate.',
            'Chocolate Blanco'  => 'Cookie con trocitos de chocolate blanco.',
            'Cafe'              => 'Cookie con sabor a café.',
            'Pistacho'          => 'Rellena de pistacho con trocitos de pistacho.',
            'Chocolate'         => 'Cookie normal con trocitos de chocolate.',

            // TORTAS
            'Carrot Cake'       => 'Torta húmeda de zanahoria con queso crema.',
            'Torta Cafe'        => 'Bizcocho suave con intenso sabor a café.',
            'Cheesecake'        => 'Torta cremosa con base de galletas crocante.',
            'Torta Frutilla'    => 'Torta suave con relleno de crema y frutilla.',
            'Torta Chocolate'   => 'Torta con relleno de chocolate amargo.',
            'Torta Frutos Rojos'=> 'Suave y rellena con frutos rojos.',
        ];

        foreach ($descripciones as $nombre => $descripcion) {
            DB::table('productos')
                ->where('nombre', $nombre)
                ->update(['descripcion' => $descripcion]);
        }

        // Frutos Rojos aparece en rolls y cookies, hay que separar por categoria
        DB::table('productos')
            ->where('nombre', 'Frutos Rojos')
            ->where('categoria', 'roll')
            ->update(['descripcion' => 'Roll de canela con cobertura de frutos rojos.']);

        DB::table('productos')
            ->where('nombre', 'Frutos Rojos')
            ->where('categoria', 'cookie')
            ->update(['descripcion' => 'Cookie con relleno de frutos rojos.']);

        // Clasica también aparece en cookies
        DB::table('productos')
            ->where('nombre', 'Clasica')
            ->where('categoria', 'cookie')
            ->update(['descripcion' => 'Cookie con chips de chocolate.']);
    }
}