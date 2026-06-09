<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'cliente_id',
        'total',
        'estado',
        'direccion',
        'telefono',
    ];

    public function cliente()
    {
        return $this->belongsTo(\App\Models\User::class, 'cliente_id');
    }
}