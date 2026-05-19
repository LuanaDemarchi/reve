<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

public function up(): void
{
    Schema::create('categorias', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 100);
        $table->text('descripcion')->nullable();
        $table->boolean('activa')->default(true);
        $table->timestamps();
    });
    protected $fillable = ['nombre', 'descripcion', 'activa'];
    protected $casts = ['activa' => 'boolean'];
}
