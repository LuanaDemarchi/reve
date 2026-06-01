<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    // Le indicamos a Laravel los campos que puede escribir en la BD
    protected $fillable = ['nombre', 'email', 'asunto', 'mensaje'];
}
