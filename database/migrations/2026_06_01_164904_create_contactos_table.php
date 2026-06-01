<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('asunto')->nullable();
            $table->text('mensaje');
            $table->timestamps(); // Esto nos guarda la fecha y hora de la consulta automáticamente
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
