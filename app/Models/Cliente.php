<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
public function up(): void
{
    Schema::create('clientes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 150);
        $table->string('apellido', 150);
        $table->string('email', 150)->unique();
        $table->string('telefono', 50)->nullable();
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });

    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'activo'];
    protected $casts = ['activo' => 'boolean'];
}