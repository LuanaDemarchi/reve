<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
   {
    Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 150);
        $table->text('descripcion')->nullable();
        $table->decimal('precio', 10, 2);
        $table->integer('stock')->default(0);
        $table->string('url_imagen')->nullable();
        $table->boolean('activo')->default(true);
        $table->timestamps();
    });
      }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }

    public function publico()
{
    $rolls   = Producto::where('activo', true)->where('nombre', 'like', '%roll%')->orWhere('nombre', 'like', '%canela%')->get();
    $cookies = Producto::where('activo', true)->where('nombre', 'like', '%cookie%')->orWhere('nombre', 'like', '%galleta%')->get();
    $tortas  = Producto::where('activo', true)->where('nombre', 'like', '%torta%')->orWhere('nombre', 'like', '%cake%')->get();

    return view('productos', compact('rolls', 'cookies', 'tortas'));
}
};
