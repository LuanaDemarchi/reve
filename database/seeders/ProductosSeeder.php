<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('productos')->insert([
            // ROLLS
            ['nombre' => 'Clasico',       'precio' => 2500, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll.jpeg',  'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Creamchesse',   'precio' => 2700, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll1.jpeg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Dulce de leche','precio' => 2700, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll2.jpeg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Chocotorta',    'precio' => 2700, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll4.jpeg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Oreo',          'precio' => 2700, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll5.jpeg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Frutos Rojos',  'precio' => 2700, 'stock' => 99, 'categoria' => 'roll',   'url_imagen' => 'img/roll6.jpeg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],

            // COOKIES
            ['nombre' => 'Clasica',          'precio' => 2200, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies1.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Chocolate Blanco', 'precio' => 2400, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies2.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cafe',             'precio' => 2500, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies3.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Pistacho',         'precio' => 3000, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies4.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Chocolate',        'precio' => 2500, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies5.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Frutos Rojos',     'precio' => 3500, 'stock' => 99, 'categoria' => 'cookie', 'url_imagen' => 'img/cookies/cookies8.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],

            // TORTAS
            ['nombre' => 'Carrot Cake',       'precio' => 8500, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta1.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Torta Cafe',        'precio' => 9000, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta2.png', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Cheesecake',        'precio' => 8800, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta3.jpg', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Torta Frutilla',    'precio' => 8800, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta4.png', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Torta Chocolate',   'precio' => 8800, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta5.png', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Torta Frutos Rojos','precio' => 8800, 'stock' => 99, 'categoria' => 'torta', 'url_imagen' => 'img/tortas/torta6.png', 'activo' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}