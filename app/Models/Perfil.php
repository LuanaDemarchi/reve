<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

public function up(): void
{
    Schema::create('perfiles', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 100); // Ej: Administrador, Cliente, Vendedor
        $table->text('descripcion')->nullable();
        $table->timestamps();
    });
    protected $fillable = ['nombre', 'descripcion'];
}