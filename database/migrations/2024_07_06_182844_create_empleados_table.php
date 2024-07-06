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
    Schema::create('empleados', function (Blueprint $table) {
        $table->id('id_empleado'); // Clave primaria autoincremental
        $table->string('nombre');
        $table->string('apellido');
        $table->string('telefono');
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
        Schema::dropIfExists('empleados');
    }
};
