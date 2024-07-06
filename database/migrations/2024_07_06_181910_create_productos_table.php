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
    // Creacion de la tabla producto
    Schema::create('productos', function (Blueprint $table) {
        $table->id('id_producto'); // Clave primaria autoincremental
        $table->string('nombre');
        $table->text('descripcion');
        $table->decimal('precio', 8, 2);
        $table->integer('cantidad');
        $table->unsignedBigInteger('id_empresa'); // Clave foránea
        $table->timestamps();

        // Definir id_empresa como clave foránea
        $table->foreign('id_empresa')->references('id_empresa')->on('empresas')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
