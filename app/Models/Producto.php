<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory; 

    // Campos permitidos para guardar desde los formularios
  protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'url_imagen', 'activo'];

    // Formateo automático de tipos de datos al salir de la Base de Datos
    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
        'activo' => 'boolean',
    ];
}